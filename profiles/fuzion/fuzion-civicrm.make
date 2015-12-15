api = 2
core = 7.x

projects[civicrm][type] = module
projects[civicrm][download][type] = file
projects[civicrm][download][url] = https://download.civicrm.org/civicrm-4.4.11-drupal.tar.gz
projects[civicrm][directory_name] = civicrm

projects[civicrm-core][type] = module
projects[civicrm-core][download][type] = git
projects[civicrm-core][download][url] = git@github.com:fuzionnz/civicrm-core.git
projects[civicrm-core][directory_name] = civicrm

projects[civicrm-drupal][type] = module
projects[civicrm-drupal][download][type] = git
projects[civicrm-drupal][download][url] = git@github.com:fuzionnz/civicrm-drupal.git
projects[civicrm-drupal][directory_name] = civicrm/drupal
projects[civicrm-drupal][overwrite] = true
