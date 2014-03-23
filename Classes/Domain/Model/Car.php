<?php
namespace PanadeEdu\PdeCarExample\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Florian Tatzel <panadeedu@googlemail.com>, PanadeEdu
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package pde_car_example
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Car extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Car Name
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * Car Price
	 *
	 * @var \integer
	 * @validate NotEmpty
	 */
	protected $price;

	/**
	 * Car Color
	 *
	 * @var \string
	 */
	protected $color;

	/**
	 * owner
	 *
	 * @var \string
	 */
	protected $owner;

	/**
	 * Returns the name
	 *
	 * @return \string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param \string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the price
	 *
	 * @return \integer $price
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * Sets the price
	 *
	 * @param \integer $price
	 * @return void
	 */
	public function setPrice($price) {
		$this->price = $price;
	}

	/**
	 * Returns the color
	 *
	 * @return \string $color
	 */
	public function getColor() {
		return $this->color;
	}

	/**
	 * Sets the color
	 *
	 * @param \string $color
	 * @return void
	 */
	public function setColor($color) {
		$this->color = $color;
	}

	/**
	 * Returns the owner
	 *
	 * @return \string $owner
	 */
	public function getOwner() {
		return $this->owner;
	}

	/**
	 * Sets the owner
	 *
	 * @param \string $owner
	 * @return void
	 */
	public function setOwner($owner) {
		$this->owner = $owner;
	}

}
?>