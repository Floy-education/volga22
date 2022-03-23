<?php

namespace App\DataFixtures;

use App\Entity\Dictionary;
use App\Entity\Word;
use App\Service\Image\ImageService;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class WordFixtures extends Fixture implements DependentFixtureInterface
{
    const FAKE_WORDS = [
        ["en" => "conga", "ru" => "латиноамериканский танец"],
        ["en" => "turn down", "ru" => "сделать потише"],
        ["en" => "shaving cream", "ru" => "крем для бритья"],
        ["en" => "characteristic", "ru" => "характеристика"],
        ["en" => "chapter", "ru" => "глава"],
        ["en" => "pure", "ru" => "чистый"],
        ["en" => "bookstore", "ru" => "книжный магазин"],
        ["en" => "misery", "ru" => "страдание"],
        ["en" => "dome", "ru" => "купол"],
        ["en" => "messiah", "ru" => "мессия"],
        ["en" => "crane", "ru" => "кран"],
        ["en" => "draughts", "ru" => "шашки"],
        ["en" => "slingshot", "ru" => "этикетка"],
        ["en" => "cinnamon roll", "ru" => "булочка с корицей"],
        ["en" => "chosen", "ru" => "выбранный"],
        ["en" => "discuss", "ru" => "обсуждение"]
    ];

    public function __construct(
        private ImageService $imageService,
    ){}

    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < DictionaryFixtures::NUMBER_OF_ENTITIES; $i++) {

            for ($j = 0; $j < DictionaryFixtures::NUMBER_OF_WORDS; $j++) {

                $word = new Word();

                /** @var Dictionary $dictionary */
                $dictionary = $manager->getRepository(Dictionary::class)->find($i+1);
                $word->setDictionary($dictionary);

                $rand = mt_rand(0, count(self::FAKE_WORDS) - 1);
                $word->setEng(self::FAKE_WORDS[$rand]['en']);
                $word->setRu(self::FAKE_WORDS[$rand]['ru']);

                $image = $this->imageService->devUpload('word.png');
                $word->setPreview($image);

                $manager->persist($word);

            }
        }

        $manager->flush();
    }

    /**
     * @return array
     */
    public function getDependencies(): array
    {
        return [
            DictionaryFixtures::class
        ];
    }
}
