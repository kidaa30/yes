<?php

/**
 * Civixero BankTransaction push API specification.
 *
 * This is used for documentation and validation.
 *
 * @param array $spec description of fields supported by this API call
 *
 * @see http://wiki.civicrm.org/confluence/display/CRM/API+Architecture+Standards
 */
function _civicrm_api3_civixero_banktransactionpush_spec(&$spec) {
  $spec['contribution_id'] = array(
    'type' => CRM_Utils_Type::T_INT,
    'name' => 'contribution_id',
    'title' => 'Contribution ID',
    'description' => 'contribution id (optional, overrides needs_update flag)',
  );
  $spec['connector_id'] = array(
    'api.default' => 0,
    'title' => 'Connector if defined or 0 for site wide',
  );
}

/**
 * Civixero BankTransaction push API.
 *
 * @param array $params
 *
 * @return array
 *   API result descriptor
 *
 * @see civicrm_api3_create_success
 * @see civicrm_api3_create_error
 * @throws API_Exception
 */
function civicrm_api3_civixero_banktransactionpush($params) {
  $xero = new CRM_Civixero_BankTransaction($params);
  $xero->push($params);
}
