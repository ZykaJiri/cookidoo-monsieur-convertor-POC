<?php

namespace App\ChatGptRecipeConvertor;

class MonsieurCuisineCapabilities
{
    // Data-mined using vue devtools on the monsieur cuisine website - when creating a new recipe
    public const CAPABILITIES = '[
  {
    "name": "kneadingSolidDough",
    "label": "preset",
    "fields": [
      {
        "input": "time",
        "type": "seconds",
        "min": 45,
        "max": 240
      }
    ],
    "beStoredParameters": {
      "weight": false,
      "temperature": false,
      "speed": false,
      "time": true
    },
    "requireDescription": false,
    "tips": "kneadingSolidDoughTips",
    "tooltip": "kneadingSolidDoughTooltip"
  },
  {
    "name": "kneadingSoftDough",
    "label": "preset",
    "fields": [
      {
        "input": "time",
        "type": "seconds",
        "min": 45,
        "max": 240
      }
    ],
    "beStoredParameters": {
      "weight": false,
      "temperature": false,
      "speed": false,
      "time": true
    },
    "requireDescription": false,
    "tips": "kneadingSoftDoughTips",
    "tooltip": "kneadingSoftDoughTooltip"
  },
  {
    "name": "kneadingLiquidDough",
    "label": "preset",
    "fields": [
      {
        "input": "time",
        "type": "seconds",
        "min": 45,
        "max": 360
      }
    ],
    "beStoredParameters": {
      "weight": false,
      "temperature": false,
      "speed": false,
      "time": true
    },
    "requireDescription": false,
    "tips": "kneadingLiquidDoughTips",
    "tooltip": "kneadingLiquidDoughTooltip"
  },
  {
    "name": "steaming",
    "label": "preset",
    "fields": [
      {
        "input": "time",
        "type": "seconds",
        "min": 0,
        "max": 3600
      }
    ],
    "beStoredParameters": {
      "weight": false,
      "temperature": false,
      "speed": false,
      "time": true
    },
    "requireDescription": false
  },
  {
    "name": "roasting",
    "label": "preset",
    "fields": [
      {
        "input": "temperature-step",
        "steps": [
          0,
          37,
          40,
          45,
          50,
          55,
          60,
          65,
          70,
          75,
          80,
          85,
          90,
          95,
          100,
          105,
          110,
          115,
          120,
          125,
          130
        ]
      },
      {
        "input": "time",
        "type": "seconds",
        "min": 0,
        "max": 840
      }
    ],
    "beStoredParameters": {
      "weight": false,
      "temperature": true,
      "speed": false,
      "time": true
    },
    "requireDescription": false
  },
  {
    "name": "scale",
    "label": "targetedWeight",
    "fields": [
      {
        "input": "weight",
        "min": 5,
        "max": 5000
      }
    ],
    "beStoredParameters": {
      "weight": true,
      "temperature": false,
      "speed": false,
      "time": false
    },
    "requireDescription": true
  },
  {
    "name": "customized",
    "fields": [
      {
        "input": "temperature-step",
        "steps": [
          0,
          37,
          40,
          45,
          50,
          55,
          60,
          65,
          70,
          75,
          80,
          85,
          90,
          95,
          100,
          105,
          110,
          115,
          120,
          125,
          130
        ]
      },
      {
        "input": "time",
        "type": "seconds",
        "min": 1,
        "max": 5940
      },
      {
        "input": "speed",
        "min": 1,
        "max": 10,
        "lowerBoundary": 0,
        "upperBoundary": 3,
        "temperatureDependentUpperBoundaries": [
          10,
          3
        ]
      },
      {
        "input": "direction",
        "options": [
          {
            "label": "turnLeft",
            "value": true
          },
          {
            "label": "turnRight",
            "value": false
          }
        ]
      }
    ],
    "beStoredParameters": {
      "weight": false,
      "temperature": true,
      "speed": true,
      "time": true
    },
    "requireDescription": false
  },
  {
    "name": "sousVide",
    "label": "preset",
    "fields": [
      {
        "input": "temperature",
        "min": 40,
        "max": 85
      },
      {
        "input": "time",
        "type": "minutes",
        "min": 15,
        "max": 720
      }
    ],
    "beStoredParameters": {
      "weight": false,
      "temperature": true,
      "speed": false,
      "time": true
    },
    "requireDescription": false
  },
  {
    "name": "slowCooking",
    "label": "preset",
    "fields": [
      {
        "input": "temperature-step",
        "steps": [
          37,
          40,
          45,
          50,
          55,
          60,
          65,
          70,
          75,
          80,
          85,
          90,
          95
        ]
      },
      {
        "input": "time",
        "type": "minutes",
        "min": 15,
        "max": 480
      }
    ],
    "beStoredParameters": {
      "weight": false,
      "temperature": true,
      "speed": false,
      "time": true
    },
    "requireDescription": false
  },
  {
    "name": "cookingEggs",
    "fields": [
      {
        "input": "egg",
        "sizeOptions": [
          "small",
          "medium",
          "large"
        ],
        "textureOptions": [
          "soft",
          "waxySoft",
          "hard"
        ],
        "durationCombinations": {
          "small": {
            "soft": 8,
            "waxySoft": 9,
            "hard": 15
          },
          "medium": {
            "soft": 10,
            "waxySoft": 12,
            "hard": 18
          },
          "large": {
            "soft": 11,
            "waxySoft": 13,
            "hard": 18
          }
        }
      }
    ],
    "beStoredParameters": null,
    "requireDescription": false
  },
  {
    "name": "precleaning",
    "label": "preset",
    "fields": [
      {
        "input": "cleaning",
        "cleaningOptions": [
          "short",
          "long"
        ],
        "durationCombinations": {
          "short": 1.5,
          "long": 5
        }
      }
    ],
    "beStoredParameters": null,
    "requireDescription": false
  },
  {
    "name": "fermentation",
    "fields": [
      {
        "input": "temperature-step",
        "steps": [
          37,
          40,
          45,
          50,
          55,
          60,
          65
        ]
      },
      {
        "input": "time",
        "type": "minutes",
        "min": 30,
        "max": 720
      }
    ],
    "beStoredParameters": {
      "weight": false,
      "temperature": true,
      "speed": false,
      "time": true
    },
    "requireDescription": false
  },
  {
    "name": "turbo",
    "label": "holdFor",
    "fields": [
      {
        "input": "turbo",
        "time": {
          "min": 1,
          "max": 20,
          "lowerBoundary": 0,
          "upperBoundary": 20
        }
      }
    ],
    "beStoredParameters": {
      "weight": false,
      "temperature": false,
      "speed": false,
      "time": true
    },
    "requireDescription": true
  },
  {
    "name": "riceCooking",
    "label": "preset",
    "fields": [
      {
        "input": "time",
        "type": "seconds",
        "min": 1200,
        "max": 2400
      }
    ],
    "beStoredParameters": {
      "weight": false,
      "temperature": false,
      "speed": false,
      "time": true
    },
    "requireDescription": false
  },
  {
    "name": "foodProcessor",
    "label": "preset",
    "fields": [
      {
        "input": "time",
        "type": "seconds",
        "min": 1,
        "max": 300
      }
    ],
    "beStoredParameters": {
      "weight": false,
      "temperature": false,
      "speed": false,
      "time": true
    },
    "requireDescription": false
  },
  {
    "name": "puree",
    "label": "preset",
    "fields": [
      {
        "input": "time",
        "type": "seconds",
        "min": 30,
        "max": 120
      }
    ],
    "beStoredParameters": {
      "weight": false,
      "temperature": false,
      "speed": false,
      "time": true
    },
    "requireDescription": false
  },
  {
    "name": "smoothie",
    "label": "preset",
    "fields": [
      {
        "input": "time",
        "type": "seconds",
        "min": 30,
        "max": 120
      }
    ],
    "beStoredParameters": {
      "weight": false,
      "temperature": false,
      "speed": false,
      "time": true
    },
    "requireDescription": false
  }
]';

}