<?php

function get_tribe_names() {
    return [
        '∑∫ỹriȱŋ',
        'Ai-Mo',
        'Aquarion',
        'Bardur',
        'Cymanti',
        'Hoodrick',
        'Imperius',
        'Kickoo',
        'Luxidoor',
        'Oumaji',
        'Polaris',
        'Quetzali',
        'Vengir',
        'Xin-xi',
        'Yădakk',
        'Zebasi',
    ];
}

function get_unit_names() {
    return array_keys(get_units(''));
}

// Image	Name	Cost (stars)	Health	Attack	Defence	Movement	Range	Skills
// WarriorX
// Warrior	2	10	2	2	1	1	Dash, Fortify
// Archer-1
// Archer	3	10	2	1	1	2	Dash, Fortify
// Defender-2
// Defender	3	15	1	3	1	1	Fortify
// RiderO
// Rider	3	10	2	1	2	1	Dash, Escape, Fortify
// CloakI
// Cloak	8	5	0	0.5	2	1	Hide, Sneak, Infiltrate, Dash
// Dagger
// Dagger	N/A	10	2	2	1	1	Dash, Surprise, Independent
// Mind Bender
// Mind Bender	5	10	0	1	1	1	Heal, Convert, Detect
// Swordsman-1
// Swordsman	5	15	3	3	1	1	Dash, Fortify
// CatapultX
// Catapult	8	10	4	0	1	3	None
// KnightX
// Knight	8	10	3.5	1	3	1	Dash, Persist, Fortify
// GiantX
// Giant	N/A	40	5	4	1	1	None
// Bunny
// Bunny	N/A	20	5	1	1	1	Independent
// Nature Bunta
// Bunta	N/A	20	5	1	1	1	Independent
// ADVERTISEMENT

// Naval
// Image	Name	Cost (stars)	Health	Attack	Defence	Movement	Range	Skills
// BoatK
// Boat	N/A	Varies	1	1	2	2	Dash, Carry, Float
// ShipK
// Ship	Upgrade from Boat: 5 stars	Varies	2	2	3	2	Dash, Carry, Float
// File:Kickoo Battleship.png
// Battleship	Upgrade from Ship: 15 stars	Varies	4	3	3	2	Dash, Scout, Carry, Float
// Dinghy
// Dinghy	N/A	5	0	0.5	2	1	Carry, Float, Hide, Sneak, Infiltrate
// Pirate
// Pirate	N/A	10	2	2	1	1	Dash, Surprise, Independent
// Aquarion
// The following units are unique to the Aquarion special tribe.

// Image	Name	Replaces	Cost (stars)	Health	Attack	Defence	Movement	Range	Skills
// Amphibian
// Amphibian	Rider	3	10	2	1	2	1	Dash, Escape, Float, Fortify
// Tridention-1
// Tridention	Knight	8	15	3	1	2	2	Dash, Escape, Float, Fortify
// Crab
// Crab	Giant	N/A	40	4	4	1	1	Escape, Float
// ADVERTISEMENT

// ∑∫ỹriȱŋ
// The following units are unique to the ∑∫ỹriȱŋ special tribe.

// Image	Name	Replaces	Cost (stars)	Health	Attack	Defence	Movement	Range	Skills
// PolytaurE
// Polytaur	Hunting	2	15	3	1	1	1	Dash, Fortify, Independent
// Navalon-2
// Navalon	Whale Hunting	5	30	4	4	2	1	Dash, Persist, Navigate, Float
// Dragon Egg-0
// Dragon Egg	Giant	N/A	10	0	2	1	N/A	Grow, Fortify
// Baby Dragon
// Baby Dragon	Giant	N/A	15	3	3	2	1	Grow, Dash, Fly, Escape, Scout
// Fire Dragon
// Fire Dragon	Giant	N/A	20	4	3	3	2	Dash, Fly, Splash, Scout
// Polaris
// The following units are unique to the Polaris special tribe.

// Image	Name	Replaces	Cost (stars)	Health	Attack	Defence	Movement	Range	Skills
// Ice archer
// Ice Archer	Archer	3	10	0.1	1	1	2	Dash, Freeze, Fortify
// Battle Sled
// Battle Sled	Naval units	5	15	3	2	2	1	Dash, Escape, Skate
// Mooni-0
// Mooni	Naval units	5	10	0	2	1	1	Skate, Freeze Area
// Ice fortress
// Ice Fortress	Battleship	15	20	4	3	1	2	Skate, Scout
// Gaami copy
// Gaami	Giant	N/A	30	4	4	1	1	Auto Freeze, Freeze Area
// ADVERTISEMENT

// Cymanti
// The following units are unique to the Cymanti special tribe.

// Image	Name	Replaces	Cost (stars)	Health	Attack	Defence	Movement	Range	Skills
// Hexapod
// Hexapod	Rider	3	5	3	1	2	1	Dash, Escape, Creep, Sneak
// Kiton
// Kiton	Defender	3	15	1	3	1	1	Poison
// Phychi
// Phychi	Archer	3	5	1	1	2	2	Fly, Dash, Poison, Surprise
// Shaman
// Shaman	Mind Bender	5	10	1	1	1	1	Convert, Boost
// Raychi
// Raychi	Naval units	8	15	3	2	3	1	Dash, Float, Creep, Navigate, Explode
// Exida
// Exida	Catapult	8	10	3	1	1	3	Poison, Splash
// Doomux
// Doomux	Knight	10	20	4	2	3	1	Dash, Creep, Explode
// Centipede
// Centipede	Giant	N/A	20	4	3	2	1	Dash, Eat, Creep
// Segment
// Segment	Giant	N/A	10	2	2	1	1	Independent, Creep, Explode
// Removed
// Image	Unit	Cost (stars)	Health	Attack	Defence	Movement	Range	Skills
// Guard tower
// Guard Tower	20	20	3	2	0	2	Build
// Scout
// Scout	2	5	0	0	2	N/A	Scout, Sneak


function get_units_with_health() {
    return [
        'Amphibian' => [
            'tribe' => 'Aquarion',
            'name' => 'Amphibian',
            'cost' => 3,
            'health' => 10,
            'attack' => 2,
            'defense' => 1,
            'movement' => 2,
            'range' => 1,
            'skills' => [ 'dash', 'escape', 'float', 'fortify' ],
        ],
        'Archer' => [
            'tribe' => 'default',
            'name' => 'Archer',
            'cost' => 3,
            'health' => 10,
            'attack' => 2,
            'defense' => 1,
            'movement' => 1,
            'range' => 2,
            'skills' => [ 'dash', 'fortify' ],
        ],
        'BabyDragon' => [
            'tribe' => 'Elyrion',
            'name' => 'Baby Dragon',
            'cost' => 15,
            'health' => 15,
            'attack' => 3,
            'defense' => 3,
            'movement' => 2,
            'range' => 1,
            'skills' => [ 'grow', 'dash', 'fly', 'escape', 'scout' ],
        ],
        'BattleSled' => [
            'tribe' => 'Polaris',
            'name' => 'Battle Sled',
            'cost' => 5,
            'health' => 15,
            'attack' => 3,
            'defense' => 2,
            'movement' => 2,
            'range' => 1,
            'skills' => [ 'dash', 'escape', 'skate' ],
        ],
        'Bombership' => [
            'tribe' => 'default',
            'name' => 'Bombership',
            'cost' => 5,
            'health' => 15,
            'attack' => 3,
            'defense' => 2,
            'movement' => 2,
            'range' => 1,
            'skills' => [ 'dash', 'escape', 'skate' ],
        ],
        'Catapult' => [
            'tribe' => 'default',
            'name' => 'Catapult',
            'cost' => 8,
            'health' => 10,
            'attack' => 4,
            'defense' => 0,
            'movement' => 1,
            'range' => 3,
            'skills' => [],
        ],
        'Centipede' => [
            'tribe' => 'Cymanti',
            'name' => 'Centipede',
            'cost' => 20,
            'health' => 20,
            'attack' => 4,
            'defense' => 3,
            'movement' => 2,
            'range' => 1,
            'skills' => [ 'dash', 'eat', 'creep' ],
        ],
        'Cloak_Boat' => [
            'tribe' => 'default',
            'name' => 'Cloak Boat',
            'cost' => 5,
            'health' => 10,
            'attack' => 1,
            'defense' => 1,
            'movement' => 2,
            'range' => 2,
            'skills' => [ 'dash', 'carry', 'float' ],
        ],
        'Cloak' => [
            'tribe' => 'default',
            'name' => 'Cloak',
            'cost' => 8,
            'health' => 5,
            'attack' => 0,
            'defense' => 0,
            'movement' => 2,
            'range' => 1,
            'skills' => [ 'hide', 'sneak', 'infiltrate', 'dash' ],
        ],
        'Crab' => [
            'tribe' => 'Aquarion',
            'name' => 'Crab',
            'cost' => 40,
            'health' => 40,
            'attack' => 4,
            'defense' => 4,
            'movement' => 1,
            'range' => 1,
            'skills' => [ 'escape', 'float' ],
        ],
        'Dagger' => [
            'tribe' => 'default',
            'name' => 'Dagger',
            'cost' => 10,
            'health' => 10,
            'attack' => 2,
            'defense' => 2,
            'movement' => 1,
            'range' => 1,
            'skills' => [ 'dash', 'surprise', 'independent' ],
        ],
        'Defender' => [
            'tribe' => 'default',
            'name' => 'Defender',
            'cost' => 3,
            'health' => 15,
            'attack' => 1,
            'defense' => 3,
            'movement' => 1,
            'range' => 1,
            'skills' => [ 'fortify' ],
        ],
        'Doomux' => [
            'tribe' => 'Cymanti',
            'name' => 'Doomux',
            'cost' => 10,
            'health' => 20,
            'attack' => 4,
            'defense' => 2,
            'movement' => 3,
            'range' => 1,
            'skills' => [ 'dash', 'creep', 'explode' ],
        ],
        'DragonEgg' => [
            'tribe' => 'Elyrion',
            'name' => 'Dragon Egg',
            'cost' => 10,
            'health' => 10,
            'attack' => 0,
            'defense' => 2,
            'movement' => 1,
            'range' => 1,
            'skills' => [ 'grow', 'fortify' ],
        ],
        'Exida' => [
            'tribe' => 'Cymanti',
            'name' => 'Exida',
            'cost' => 8,
            'health' => 10,
            'attack' => 3,
            'defense' => 1,
            'movement' => 1,
            'range' => 3,
            'skills' => [ 'poison', 'splash' ],
        ],
        'FireDragon' => [
            'tribe' => 'Elyrion',
            'name' => 'Fire Dragon',
            'cost' => 20,
            'health' => 20,
            'attack' => 4,
            'defense' => 3,
            'movement' => 3,
            'range' => 2,
            'skills' => [ 'dash', 'fly', 'splash', 'scout' ],
        ],
        'Gaami' => [
            'tribe' => 'Polaris',
            'name' => 'Gaami',
            'cost' => 30,
            'health' => 30,
            'attack' => 4,
            'defense' => 4,
            'movement' => 1,
            'range' => 1,
            'skills' => [ 'auto freeze', 'freeze area' ],
        ],
        'Giant' => [
            'tribe' => 'default',
            'name' => 'Giant',
            'cost' => 40,
            'health' => 40,
            'attack' => 5,
            'defense' => 4,
            'movement' => 1,
            'range' => 1,
            'skills' => [],
        ],
        'Hexapod' => [
            'tribe' => 'Cymanti',
            'name' => 'Hexapod',
            'cost' => 3,
            'health' => 5,
            'attack' => 3,
            'defense' => 1,
            'movement' => 2,
            'range' => 1,
            'skills' => [ 'dash', 'escape', 'creep', 'sneak' ],
        ],
        'IceArcher' => [
            'tribe' => 'Polaris',
            'name' => 'Ice Archer',
            'cost' => 3,
            'health' => 10,
            'attack' => 0.1,
            'defense' => 1,
            'movement' => 1,
            'range' => 2,
            'skills' => [ 'dash', 'freeze', 'fortify' ],
        ],
        'IceFortress' => [
            'tribe' => 'Polaris',
            'name' => 'Ice Fortress',
            'cost' => 15,
            'health' => 20,
            'attack' => 4,
            'defense' => 3,
            'movement' => 1,
            'range' => 2,
            'skills' => [ 'skate', 'scout' ],
        ],
        'Juggernaut' => [
            'tribe' => 'default',
            'name' => 'Juggernaut',
            'cost' => 15,
            'health' => 20,
            'attack' => 4,
            'defense' => 3,
            'movement' => 1,
            'range' => 2,
            'skills' => [ 'dash', 'scout' ],
        ],
        'Kiton' => [
            'tribe' => 'Cymanti',
            'name' => 'Kiton',
            'cost' => 3,
            'health' => 15,
            'attack' => 1,
            'defense' => 3,
            'movement' => 1,
            'range' => 1,
            'skills' => [ 'poison' ],
        ],
        'Knight' => [
            'tribe' => 'default',
            'name' => 'Knight',
            'cost' => 8,
            'health' => 20,
            'attack' => 3.5,
            'defense' => 1,
            'movement' => 3,
            'range' => 1,
            'skills' => [ 'dash', 'persist', 'fortify' ],
        ],
        'MindBender' => [
            'tribe' => 'default',
            'name' => 'Mind Bender',
            'cost' => 5,
            'health' => 10,
            'attack' => 0,
            'defense' => 1,
            'movement' => 1,
            'range' => 1,
            'skills' => [ 'heal', 'convert', 'detect' ],
        ],
        'Mooni' => [
            'tribe' => 'Polaris',
            'name' => 'Mooni',
            'cost' => 5,
            'health' => 10,
            'attack' => 0,
            'defense' => 2,
            'movement' => 1,
            'range' => 1,
            'skills' => [ 'skate', 'freeze area' ],
        ],
        'Phychi' => [
            'tribe' => 'Cymanti',
            'name' => 'Phychi',
            'cost' => 3,
            'health' => 5,
            'attack' => 1,
            'defense' => 1,
            'movement' => 2,
            'range' => 2,
            'skills' => [ 'fly', 'dash', 'poison', 'surprise' ],
        ],
        'Pirate' => [
            'tribe' => 'default',
            'name' => 'Pirate',
            'cost' => 10,
            'health' => 10,
            'attack' => 2,
            'defense' => 2,
            'movement' => 1,
            'range' => 1,
            'skills' => [ 'dash', 'surprise', 'independent' ],
        ],
        'Polytaur' => [
            'tribe' => 'Elyrion',
            'name' => 'Polytaur',
            'cost' => 2,
            'health' => 15,
            'attack' => 3,
            'defense' => 1,
            'movement' => 1,
            'range' => 1,
            'skills' => [ 'dash', 'fortify', 'independent' ],
        ],
        'Rammership' => [
            'tribe' => 'default',
            'name' => 'Rammership',
            'cost' => 5,
            'health' => 15,
            'attack' => 3,
            'defense' => 2,
            'movement' => 2,
            'range' => 1,
            'skills' => [ 'dash', 'escape', 'skate' ],
        ],
        'Raychi' => [
            'tribe' => 'Cymanti',
            'name' => 'Raychi',
            'cost' => 8,
            'health' => 15,
            'attack' => 3,
            'defense' => 2,
            'movement' => 3,
            'range' => 1,
            'skills' => [ 'dash', 'float', 'creep', 'navigate', 'explode' ],
        ],
        'Rider' => [
            'tribe' => 'default',
            'name' => 'Rider',
            'cost' => 3,
            'health' => 10,
            'attack' => 2,
            'defense' => 1,
            'movement' => 2,
            'range' => 1,
            'skills' => [ 'dash', 'escape', 'fortify' ],
        ],
        'Scout' => [
            'tribe' => 'default',
            'name' => 'Scout',
            'cost' => 1,
            'health' => 5,
            'attack' => 1,
            'defense' => 1,
            'movement' => 2,
            'range' => 1,
            'skills' => [ 'dash', 'scout' ],
        ],
        'Scoutship' => [
            'tribe' => 'default',
            'name' => 'Scoutship',
            'cost' => 5,
            'health' => 10,
            'attack' => 2,
            'defense' => 1,
            'movement' => 2,
            'range' => 1,
            'skills' => [ 'dash', 'escape', 'skate' ],
        ],
        'Segment' => [
            'tribe' => 'Cymanti',
            'name' => 'Segment',
            'cost' => 10,
            'health' => 10,
            'attack' => 2,
            'defense' => 2,
            'movement' => 1,
            'range' => 1,
            'skills' => [ 'independent', 'creep', 'explode' ],
        ],
        'Shaman' => [
            'tribe' => 'Cymanti',
            'name' => 'Shaman',
            'cost' => 5,
            'health' => 10,
            'attack' => 1,
            'defense' => 1,
            'movement' => 1,
            'range' => 1,
            'skills' => [ 'convert', 'boost' ],
        ],
        'Swordsman' => [
            'tribe' => 'default',
            'name' => 'Swordsman',
            'cost' => 5,
            'health' => 15,
            'attack' => 3,
            'defense' => 3,
            'movement' => 1,
            'range' => 1,
            'skills' => [ 'dash', 'fortify' ],
        ],
        'Transportship' => [
            'tribe' => 'default',
            'name' => 'Transportship',
            'cost' => 5,
            'health' => 10,
            'attack' => 2,
            'defense' => 1,
            'movement' => 2,
            'range' => 1,
            'skills' => [ 'dash', 'carry', 'float' ],
        ],
        'Tridention' => [
            'tribe' => 'Aquarion',
            'name' => 'Tridention',
            'cost' => 8,
            'health' => 15,
            'attack' => 3,
            'defense' => 1,
            'movement' => 2,
            'range' => 2,
            'skills' => [ 'dash', 'escape', 'float', 'fortify' ],
        ],
        'Warrior' => [
            'tribe' => 'default',
            'name' => 'Warrior',
            'cost' => 2,
            'health' => 10,
            'attack' => 2,
            'defense' => 2,
            'movement' => 1,
            'range' => 1,
            'skills' => [ 'dash', 'fortify' ],
        ],
    ];
}

function print_units_table() {
    $units = get_units_with_health();
    echo '<table>';
    echo '<tr>';
    echo '<th class="name">Name</th>';
    echo '<th class="tribe">Tribe</th>';
    echo '<th class="health">Health</th>';
    echo '<th class="cost">Cost</th>';
    echo '<th class="attack">Attack</th>';
    echo '<th class="defense">Defense</th>';
    echo '<th class="movement">Movement</th>';
    echo '<th class="range">Range</th>';
    echo '<th class="skills">Skills</th>';
    echo '</tr>';
    foreach ($units as $unit) {
        echo '<tr>';
        echo '<td class="name">' . $unit['name'] . '</td>';
        echo '<td class="tribe">' . $unit['tribe'] . '</td>';
        echo '<td class="num health">' . $unit['health'] . '</td>';
        echo '<td class="num cost">' . $unit['cost'] . '</td>';
        echo '<td class="num attack">' . $unit['attack'] . '</td>';
        echo '<td class="num defense">' . $unit['defense'] . '</td>';
        echo '<td class="num movement">' . $unit['movement'] . '</td>';
        echo '<td class="num range">' . $unit['range'] . '</td>';
        echo '<td class="skills">' . implode(', ', $unit['skills']) . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}