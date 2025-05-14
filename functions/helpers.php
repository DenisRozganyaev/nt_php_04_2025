<?php

enum CarType: string
{
    case Sedan = 'sedan';
    case SUV = 'suv';
    case Coupe = 'coupe';
}

enum Budget
{
    case Cheap;
    case OK;
    case Expensive;
}

function buildEngine(CarType $type): string
{
    return match ($type) {
        CarType::Sedan => 'Electro',
        CarType::SUV => 'Diesel',
        CarType::Coupe => 'Gas',
    };
}

function buildHeight(Budget $budget, CarType $type): float
{
    return match(true) {
          $type === CarType::Coupe && $budget === Budget::Cheap => 15,
          $type === CarType::Coupe && $budget === Budget::OK => 13.5,
          $type === CarType::Coupe && $budget === Budget::Expensive => 12,

          $type === CarType::SUV && $budget === Budget::Cheap => 16,
          $type === CarType::SUV && $budget === Budget::OK => 18,
          $type === CarType::SUV && $budget === Budget::Expensive => 23,

          $type === CarType::Sedan && $budget === Budget::Cheap => 17,
          $type === CarType::Sedan && $budget === Budget::OK => 18.5,
          $type === CarType::Sedan && $budget === Budget::Expensive => 20,
    };
}

// function functionName (required arguments, optional arguments with default values)
function buildCarData(Budget $budget, CarType $type = CarType::Sedan): array
{
    return match ($type) {
        CarType::Coupe => [
            'engine' => buildEngine($type),
            'doors' => 3,
            'height' => buildHeight($budget, $type),
        ],
        default => [
            'engine' => buildEngine($type),
            'doors' => 5,
            'height' => buildHeight($budget, $type),
        ],
    };
}

//function showArguments(int ...$arguments): void
//{
//    foreach ($arguments as $argument) {
//        echo $argument . PHP_EOL;
//    }
//}


//function fibonacci(int $n): int
//{
//    return match ($n) {
//        0, 1 => 1,
//        default => fibonacci($n - 1) + fibonacci($n - 2),
//    };
//}


function scan(string $path): array
{
    $result = [];
    $items = array_diff(scandir($path), ['.', '..']);

    foreach ($items as $item) {
        if (is_dir($path . '/' . $item)) {
            $result[$item] = scan($path . '/' . $item); // ...test/test_1
        } else {
            $result[] = $item;
        }
    }

    return $result;
}

d(scan(__DIR__ . '/test'));
