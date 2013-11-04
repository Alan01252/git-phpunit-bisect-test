<?php
class FakeClass
{
	/**
	 */
	public function getFourThings()
	{
		$things = ['one', 'two', 'three', 'four'];

		return $things;
	}

	/**
	 * Returns three things
	 *
	 * @return array
	 */
	public function getThreeThings()
	{
		$things = ['one', 'two', 'three', 'four'];

		return $things;
	}

	/**
	 * Returns two things
	 *
	 * @return array
	 */
	public function getTwoThings()
	{
		$things = ['one', 'two'];

		return $things;
	}
}
