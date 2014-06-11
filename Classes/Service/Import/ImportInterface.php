<?php

namespace GeorgRinger\Mailtonews\Service\Import;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Georg Ringer <typo3@ringerge.org>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Import interface
 *
 * @author Georg Ringer <typo3@ringerge.org>
 */
interface ImportInterface {

	/**
	 * Check if mail is allowed
	 *
	 * @param \IncomingMail $mail
	 * @param \GeorgRinger\Mailtonews\Service\SmtpService $smtpService
	 * @return bool
	 */
	public function isAllowed(\IncomingMail $mail, \GeorgRinger\Mailtonews\Service\SmtpService $smtpService);

	/**
	 * Save mail
	 *
	 * @param \IncomingMail $mail
	 * @param \GeorgRinger\Mailtonews\Service\SmtpService $smtpService
	 * @return void
	 */
	public function save(\IncomingMail $mail, \GeorgRinger\Mailtonews\Service\SmtpService $smtpService);
}