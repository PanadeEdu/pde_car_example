<?php
namespace PanadeEdu\PdeCarExample\Controller;

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
class CarController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * carRepository
	 *
	 * @var \PanadeEdu\PdeCarExample\Domain\Repository\CarRepository
	 * @inject
	 */
	protected $carRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$cars = $this->carRepository->findAll();
		$this->view->assign('cars', $cars);
	}

	/**
	 * action show
	 *
	 * @param \PanadeEdu\PdeCarExample\Domain\Model\Car $car
	 * @return void
	 */
	public function showAction(\PanadeEdu\PdeCarExample\Domain\Model\Car $car) {
		$this->view->assign('car', $car);
	}

	/**
	 * action new
	 *
	 * @param \PanadeEdu\PdeCarExample\Domain\Model\Car $newCar
	 * @dontvalidate $newCar
	 * @return void
	 */
	public function newAction(\PanadeEdu\PdeCarExample\Domain\Model\Car $newCar = NULL) {
		$this->view->assign('newCar', $newCar);
	}

	/**
	 * action create
	 *
	 * @param \PanadeEdu\PdeCarExample\Domain\Model\Car $newCar
	 * @return void
	 */
	public function createAction(\PanadeEdu\PdeCarExample\Domain\Model\Car $newCar) {
		$this->carRepository->add($newCar);
		$this->flashMessageContainer->add('Your new Car was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \PanadeEdu\PdeCarExample\Domain\Model\Car $car
	 * @return void
	 */
	public function editAction(\PanadeEdu\PdeCarExample\Domain\Model\Car $car) {
		$this->view->assign('car', $car);
	}

	/**
	 * action update
	 *
	 * @param \PanadeEdu\PdeCarExample\Domain\Model\Car $car
	 * @return void
	 */
	public function updateAction(\PanadeEdu\PdeCarExample\Domain\Model\Car $car) {
		$this->carRepository->update($car);
		$this->flashMessageContainer->add('Your Car was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \PanadeEdu\PdeCarExample\Domain\Model\Car $car
	 * @return void
	 */
	public function deleteAction(\PanadeEdu\PdeCarExample\Domain\Model\Car $car) {
		$this->carRepository->remove($car);
		$this->flashMessageContainer->add('Your Car was removed.');
		$this->redirect('list');
	}

}
?>