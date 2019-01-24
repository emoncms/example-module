modulename_lc="mynewmodule"
modulename_uc="MyNewModule"

sed -i -e "s/example/$modulename_lc/g" *.php
sed -i -e "s/Example/$modulename_uc/g" *.php

mv example_controller.php "$modulename_lc""_controller.php"
mv example_model.php "$modulename_lc""_model.php"
mv example_schema.php "$modulename_lc""_schema.php"
mv example_menu.php "$modulename_lc""_menu.php"
mv example_view.php "$modulename_lc""_view.php"
