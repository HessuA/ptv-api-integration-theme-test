#!/bin/bash
# A script for moving all dev files out of the theme for testing with Theme Check plugin
txtbold=$(tput bold)
boldyellow=${txtbold}$(tput setaf 3)
boldgreen=${txtbold}$(tput setaf 2)
boldwhite=${txtbold}$(tput setaf 7)
yellow=$(tput setaf 3)
green=$(tput setaf 2)
white=$(tput setaf 7)
txtreset=$(tput sgr0)

echo "${YELLOW}Moving dev files out...${TXTRESET}"
mkdir -p $HOME/air-temp
find . -name '.DS_Store' -type f -delete
find ../ -name '.DS_Store' -type f -delete
rm /var/www/airdev/content/themes/ptv-api-test/sass/components/.gitkeep $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/sass/modules/.gitkeep $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/.hintrc $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/.stylelintignore $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/.nvmrc $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/.eslintrc.js $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/.browserslistrc $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/.vscode $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/.svgo.yml $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/.accessibilityrc $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/.git $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/.gitignore $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/.jshintignore $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/.travis.yml $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/package.json $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/package-lock.json $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/phpcs.xml $HOME/air-temp/
sudo mv /var/www/airdev/content/themes/ptv-api-test/node_modules $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/gulpfile.js $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/bin $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/content $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/__MACOSX $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/.scss-lint.yml $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/front-page.php $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/README.md $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/.stylelintrc $HOME/air-temp/
mv /var/www/airdev/content/themes/ptv-api-test/.editorconfig $HOME/air-temp/
mkdir -p $HOME/air-temp/template-parts
mkdir -p $HOME/air-temp/template-parts/header
mkdir -p $HOME/air-temp/template-parts/footer

# Remove custom stuff that are not part of an official WordPress theme in WP theme directory,
# Because:
# REQUIRED: The theme uses the register_taxonomy() function, which is plugin-territory functionality.
# REQUIRED: The theme uses the register_post_type() function, which is plugin-territory functionality.
rm /var/www/airdev/content/themes/ptv-api-test/inc/includes/taxonomy.php
rm /var/www/airdev/content/themes/ptv-api-test/inc/includes/post-type.php

# Screenshot, related to: https://themes.trac.wordpress.org/ticket/100180#comment:2
mv /var/www/airdev/content/themes/ptv-api-test/screenshot.png $HOME/air-temp/
cd /var/www/airdev/content/themes/ptv-api-test/
wget https://i.imgur.com/idVvQKv.png
mv -v idVvQKv.png screenshot.png

# Moving to bin dir
cd $HOME/air-temp/bin

echo "
${boldgreen}Done! Next steps:${TXTRESET}"
echo "
${boldwhite}1. Click the Check it -button: http://airdev.test/wp/wp-admin/themes.php?page=themecheck
2. Run: sh air-pack.sh (this also runs air-move-in.sh)
3. Follow instructions
${TXTRESET} "
