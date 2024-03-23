<?php

namespace App\ChatGptRecipeConvertor;

class RecipeStepsConvertorHelper
{
    public function __construct(
        public ChatGptHelper $chatGptHelper
    ) {
    }

    public function convertCookidooToMonsieurSteps(array $cookidooSteps, array $cookidooIngredients): string
    {

        $capabilitiesString = json_encode(MonsieurCuisineCapabilities::CAPABILITIES);
        $recipeSteps = json_encode($cookidooSteps);
        $ingredients = json_encode($cookidooIngredients);

        $prompt = "
        The machine has the following capabilities: $capabilitiesString
               
        Anytime recipe adds an ingredients to the bowl, instead create another step using the 'scale' capability.
        
        When filling out beStoredParameters, make sure to set all the true values with data from the recipe and completely ignore the false values, do not add them.
        if the recipe doenst use some beStoredParameters, but they are not false, then add them with a value of 0.
                
        Always keep the original language as in the recipe and ingredients, do not translate it.
        
        For every step that uses the machine, except for 'scale' while adding ingredients, use the 'customized' capability
                
        Return in the following json format, do not reply with any other text!
        {
            'steps': [
               ...steps
            ]
        }
        
        The step format for steps that use a machine capability is as follows
        {
            'step': 1,
            'capability_name': 'scale',
            'beStoredParameters': {},
            'description': 'Add tomatoes'
        },
        
        For steps that do not use a machine capability, use the following step format
        {
            'step': 1,
            'capability_name': null,
            'description': 'Halve the tomatoes in half'
        },
        
        The recipe has following steps: $recipeSteps
        
        These are the ingredients: $ingredients
        ";


        return $this->chatGptHelper->getGptResponse($prompt);
    }
}