/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

angular
    .module('ongr.translations', [
        'ui.bootstrap',
        'controller.list',
        'directive.inline',
        'util.asset'
    ])
    .constant('DATA', translations)
    .constant('LOCALES', locales);
