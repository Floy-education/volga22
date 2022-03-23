<?php

namespace App\DataFixtures;

use App\Entity\Dictionary;
use App\Service\SimplyGenerator\SimplyGenerator;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DictionaryFixtures extends Fixture
{
    /** @var int NUMBER_OF_ENTITIES */
    const NUMBER_OF_ENTITIES = 2;

    /** @var int NUMBER_OF_WORDS */
    const NUMBER_OF_WORDS = 5;

    public function __construct(
        private SimplyGenerator $generator,
    ){}

    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < self::NUMBER_OF_ENTITIES; $i++) {

            $dictionary = new Dictionary();

            $dictionary->setName($this->generator->text());

            $manager->persist($dictionary);
        }

        $manager->flush();
    }
}
