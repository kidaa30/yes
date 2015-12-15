Fuzion Profile
==============

Drupal installation profile for Fuzion sites.

Using this profile
------------------

Create a stub.make with the following contents. (If you're on a Fuzion server, check `/etc/drush/fuzion.make` for this file.)

    api = 2
    core = 7.x
    
    projects[drupal][type] = core
    projects[drupal][version] = 7.29
    
    projects[fuzion][type] = profile
    projects[fuzion][download][type] = git
    projects[fuzion][download][url] = git@github.com:fuzionnz/fuzion.git
    projects[fuzion][download][revision] = 7.x-1.x

Run `drush make stub.make` (or `drush make /etc/drush/fuzion.make`). The output should look [something like this](https://gist.github.com/xurizaemon/91f10c44ce712a6b1663).

Drush make has lots of options for you!

* If this site is a development copy from which you'll want to commit changes back upstream, use `--working-copy` to retain the Git repository information in the downloaded projects.

Drush QD
--------

TODO - Document using this makefile with `drush qd` to quickly perform all steps of creating a site.

Enabling CiviCRM
----------------

Once Drupal is fired up, you can run the CiviCRM installer at `sites/all/modules/civicrm/install/index.php` to enable CiviCRM as well.
