<?php 

class Bottle
{
	//Details....
}

interface Fragrence
{
	//Some function like Rose, Musk, Lavender
}

interface Alcohol
{
	//Some function ????
}

trait Gender
{

}

class Perfume extends Bottle implements Fragrence, Alcohol
{
	use Gender;
}