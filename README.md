# Ongoing Development

# Product Badges
Mage2 extension to add product badges

Configuration
------------------------
 
 

Technical feature
------------------------



Installation
------------------------

Enter following commands to install module:

        ```bash
        cd MAGE2_ROOT_DIR
        # install
        composer config repositories.kuzman_productbadges git https://github.com/vladankuzmanovic/ProductBadges.git
        composer require kuzman/productbadges:dev-master
        # enable
        php bin/magento module:enable Kuzman_ProductBadges --clear-static-content
        php bin/magento setup:upgrade
        php bin/magento setup:static-content:deploy
        ```

Uninstall
------------------------

Enter following commands to disable and uninstall module:

        ```bash
        cd MAGE2_ROOT_DIR
        # disable
        php bin/magento module:disable Kuzman_ProductBadges --clear-static-content    
        # uninstall
        php bin/magento module:uninstall Kuzman_ProductBadges --clear-static-content
        php bin/magento setup:static-content:deploy
        ```

