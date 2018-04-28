<?php
/*    Please retain this copyright header in all versions of the software
 *
 *    Copyright (C) Josef A. Puckl | eComStyle.de
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see {http://www.gnu.org/licenses/}.
 */
$sMetadataVersion = '2.0';
$aModule = array(
    'id'            => 'ecs_noregmail',
    'title'         => '<strong style="color:#04B431;">e</strong><strong>ComStyle.de</strong>:  <i>NoRegisterMail</i>',
    'description'   => '<i>Nach einer Kundenregistrierung wird keine Best&auml;tigungsemail versendet.</i>',
    'version'       => '2.0.1',
    'thumbnail'     => 'ecs.png',
    'author'        => '<strong style="font-size: 17px;color:#04B431;">e</strong><strong style="font-size: 16px;">ComStyle.de</strong>',
    'email'         => 'support@ecomstyle.de',
    'url'           => 'https://ecomstyle.de',
    'extend'        => array(
        \OxidEsales\Eshop\Core\Email::class => Ecs\NoRegMail\Core\Email::class,
    ),
    'events' => array(
        'onActivate'   => 'Ecs\NoRegMail\Core\Events::onActivate',
        'onDeactivate' => 'Ecs\NoRegMail\Core\Events::onDeactivate',
    ),
);