<?php
class FakeClass
{
	/**
	 * Returns three things
	 *
	 * @return array
	 */
	public function getThreeThings()
	{
		$things = ['one', 'two', 'three'];

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
