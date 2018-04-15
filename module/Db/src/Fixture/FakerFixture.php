<?php

namespace Db\Fixture;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Db\Entity;
use Faker;

class FakerFixture implements
    FixtureInterface
{
    public function load(ObjectManager $objectManager)
    {
        $generator = Faker\Factory::create();

        $populator = new Faker\ORM\Doctrine\Populator($generator, $objectManager);

        $populator->addEntity(Entity\Artist::class, 25);
        $populator->addEntity(Entity\Album::class, 100);

        $populator->execute();
    }
}
