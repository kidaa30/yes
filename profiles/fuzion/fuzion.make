api = 2
core = 7.x

projects[drupal] = 7.34
projects[drupal][patch][gitignore] = https://gist.githubusercontent.com/xurizaemon/ae4a5fae6255b1538a9c/raw/98ab9130004d6af1ad55c1d9cfe6c90ee109df35/drupal-gitignore.patch

; It looks funky, but it means we can stick to using sites/all/modules ...
defaults[projects][subdir] = ../../../sites/all/modules/

projects[views][version] = 3.8
projects[views][patch][1036962] = https://www.drupal.org/files/views-fix-destination-link-for-ajax-1036962-29.patch

projects[] = admin_menu
projects[] = civicrm_entity
projects[] = coffee
projects[] = ctools
projects[] = date
projects[] = entity
projects[] = entityreference
projects[] = environment
projects[] = environment_indicator
projects[] = features
projects[] = google_analytics
projects[] = imce
projects[] = htmlmail
projects[] = libraries
projects[] = mailsystem
projects[] = masquerade
projects[] = metatag
projects[] = mimemail
projects[] = module_filter
projects[] = node_clone
projects[] = pathauto
projects[] = redirect
projects[] = reroute_email
projects[] = rules
projects[] = smtp
projects[] = strongarm
projects[] = token
projects[] = views_bulk_operations
projects[] = webform
projects[] = webform_civicrm
projects[] = webform_layout
projects[] = wysiwyg

projects[civicrm-core][type] = module
projects[civicrm-core][download][type] = git
projects[civicrm-core][download][url] = git@github.com:fuzionnz/civicrm-core.git
projects[civicrm-core][directory_name] = civicrm

projects[civicrm-drupal][type] = module
projects[civicrm-drupal][download][type] = git
projects[civicrm-drupal][download][url] = git@github.com:fuzionnz/civicrm-drupal.git
projects[civicrm-drupal][directory_name] = civicrm/drupal
projects[civicrm-drupal][overwrite] = true

projects[archimedes][type] = module
projects[archimedes][download][type] = git
projects[archimedes][download][url] = git@github.com:xurizaemon/archimedes.git
projects[archimedes][download][revision] = 7.x-1.x

