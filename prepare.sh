modulename_lc="mynewmodule"
modulename_uc="MyNewModule"
sed -i -e "s/example/$modulename_lc/g" *.php
sed -i -e "s/Example/$modulename_uc/g" *.php
