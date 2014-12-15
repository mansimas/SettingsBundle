<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ONGR\AdminBundle\Tests\Functional\Settings;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AuthenticationTest extends WebTestCase
{
    /**
     * When accessing not a admin-user settings page, no ES requests must be made.
     *
     * No index has been created in this test, so there will be an uncaught exception, if any queries were executed.
     *
     * @see \ONGR\AdminBundle\Settings\Admin\AdminProfilesProvider::getSettings
     */
    public function testRequest()
    {
        $client = self::createClient();
        $client->request('GET', '/admin/login');
    }
}