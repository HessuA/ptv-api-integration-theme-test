#!/bin/bash
# WordPress theme starting bash script for ptv-api-test
# @Author: Roni Laukkarinen
# @Date:   2021-04-22 08:06:02
# @Last Modified by:   Roni Laukkarinen
# @Last Modified time: 2021-11-25 13:22:53

# Script specific vars
SCRIPT_LABEL='for macOS'
SCRIPT_VERSION='1.1.3 (2023-09-12)'

# Vars needed for this file to function globally
CURRENTFILE=`basename $0`

# Determine scripts location to get imports right
if [ "$CURRENTFILE" = "newtheme.sh" ]; then
  SCRIPTS_LOCATION="$( pwd )"
  source ${SCRIPTS_LOCATION}/tasks/variables.sh
  source ${SCRIPTS_LOCATION}/tasks/header.sh
  exit
else
  DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )"
  ORIGINAL_FILE=$( readlink $DIR/$CURRENTFILE )
  SCRIPTS_LOCATION=$( dirname $ORIGINAL_FILE )
fi

# Final note about server requirements
echo ""
echo "${WHITE}Using this start script requires you use the following:
https://github.com/digitoimistodude/macos-lemp-setup
https://github.com/digitoimistodude/ptv-api-test
${TXTRESET}"

# First, let's check updates to self
source ${SCRIPTS_LOCATION}/tasks/self-update.sh

# Import required tasks
source ${SCRIPTS_LOCATION}/tasks/imports.sh

# Replace ptv-api-test with your theme name and other seds
source ${SCRIPTS_LOCATION}/tasks/replaces.sh

# The end
source ${SCRIPTS_LOCATION}/tasks/footer.sh
