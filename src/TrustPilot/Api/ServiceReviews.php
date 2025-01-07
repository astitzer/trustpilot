<?php
/*
 * This file is part of the TrustPilot library.
 *
 * (c) Graphem Solutions <info@graphem.ca>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace TrustPilot\Api;

/**
 * @author Graphem Solutions <info@graphem.ca>
 */

use TrustPilot\TrustPilot;

class ServiceReviews extends AbstractApi{
    
    // Incomplete
    /**
     * Get private service reviews
     * https://developers.trustpilot.com/business-units-api#get-a-business-unit's-reviews
     *
     *
     * @param  string, array
     * @return \stdClass
     */
    public function getPrivateReviews($businessUnitId, $data)
    {
        return json_decode(
            $this->api->get('private/business-units/'. $businessUnitId .'/reviews',
                ['query' =>
                    [
                       'page' => $data['page'],
                       'perPage' => $data['perPage'],
                       'language' => $data['language'],
                    ]
                ]
            ));
    }
}
