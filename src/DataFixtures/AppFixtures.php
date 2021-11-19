<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class AppFixtures extends Fixture

{
     private $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager  ): void
    {
       $faker= Factory::create('fr_FR');

       $user = new User();

       $user->setEmail('meher@example.com')
             ->setPrenom($faker->firstName)
             ->setNom($faker->lastName)
             ->setTelephone($faker->phoneNumber)
             ->setAPropos($faker->text())
             ->setInstagram('Instagram');

        /* $password=$this->encoder->hashPassword($user,$user->getPassword()) ; */
        $password=$this->encoder->hashPassword($user,'password') ;
        $user->setPassword($password);
        $manager->persist($user);
        $manager->flush();
    }
}
