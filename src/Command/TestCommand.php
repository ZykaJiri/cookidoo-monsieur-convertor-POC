<?php

namespace App\Command;

use App\ChatGptRecipeConvertor\RecipeStepsConvertorHelper;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'test',
    description: 'Test that the AI works',
)]
class TestCommand extends Command
{
    public function __construct(
        private RecipeStepsConvertorHelper $recipeStepsConvertorHelper
    )
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        // More examples of recipes can be found in dumped-recipes.json file
        $io->success($this->recipeStepsConvertorHelper->convertCookidooToMonsieurSteps([
            "Do mixovací nádoby vložte droždí, máslo, cukr, vanilkový cukr a mléko a míchejte a hřejte 5 min/37°C/rychlost 2.",
            "Přidejte žloutky, mouku, sůl a citrónovou kůru a spusťte program Těsto /5 min.",
            "Těsto přendejte do velké mísy, překryjte čistou utěrkou a nechte 2 hodiny kynout. Plech vyložte pečicím papírem.",
            "Vykynuté těsto na pomoučené pracovní ploše rozdělte na 2 díly a vytvarujte 2 bochánky. Položte na připravený plech a nechte kynout 15 minut. Mezitím předehřejte troubu na 160 °C.",
            "Mazance uprostřed lehce nařízněte do kříže, potřete mašlovačkou rozšlehaným vejcem a posypejte plátky mandlí. Pečte 45–50 minut (160 °C).",
            "Nechte vychladnout a podávejte nakrájené na plátky."
        ],
        [
            "42 gramů droždí",
            "170 gramů másla",
            "150 gramů krupicového cukru",
            "1 balíček vanilkového cukru  nebo 20 gramů domácího vanilkového cukru",
            "350 gramů mléka",
            "3 žloutky",
            "375 gramů hladké mouky, plus navíc na pomoučení",
            "375 gramů polohrubé mouky",
            "1 čajová lžička soli",
            "1 polévková lžíce nastrouhané citrónové kůry (cca z jednoho bio citrónu)",
            "1 vejce",
            "80 gramů plátků mandlí"
        ]
        ));

        return Command::SUCCESS;
    }
}
