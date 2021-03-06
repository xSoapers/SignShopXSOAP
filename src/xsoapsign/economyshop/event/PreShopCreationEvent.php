<?php

/*
 * EconomyS, the massive economy plugin with many features for PocketMine-MP
 * Copyright (C) 2013-2015  XSOAP <irsanagil15@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace xsoapsign\economyshop\event;

use pocketmine\event\plugin\PluginEvent;
use pocketmine\Player;

class PreShopCreationEvent extends PluginEvent{
	private $owner, $sign;
	
	public function __construct(Player $owner){
		$this->owner = $owner;
	}
	
	public function getOwner(){
		return $this->owner;
	}
	
	public function getSign(){
		return $this->sign;
	}
}