<?php
/*
 * Copyright (c) 2010 by Justin Otherguy <justin@justinotherguy.org>
 *
 * This program is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License (either version 2 or
 * version 3) as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
 *
 * For more information on the GPL, please go to:
 * http://www.gnu.org/copyleft/gpl.html
 */

namespace Volkszaehler\Model\Channel;

/**
 * Meter class
 *
 * @Entity
 */
class Meter extends Channel {
	/** @Column(type="integer") */
	private $resolution;

	/** @Column(type="decimal") */
	private $cost;
	
	/*
	 * indicator => unit mapping
	 */
	protected static $indicators = array(
		'power' => 'kW/h',
		'gas' => 'qm/h',
		'water' => 'qm/h'
	);
	
	public function getResolution() { return $this->resolution; }
	public function setResolution($resolution) { $this->resolution = $resolution; }
	public function getCost() { return $this->cost; }
	public function setCost($cost) { $this->cost = $cost; }
}