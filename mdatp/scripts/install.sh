#!/bin/bash

# mdatp controller
CTL="${BASEURL}index.php?/module/mdatp/"

# Get the scripts in the proper directories
"${CURL[@]}" "${CTL}get_script/mdatp.sh" -o "${MUNKIPATH}preflight.d/mdatp.sh"

# Check exit status of curl
if [ $? = 0 ]; then
	# Make executable
	chmod a+x "${MUNKIPATH}preflight.d/mdatp.sh"

	# Set preference to include this file in the preflight check
	setreportpref "mdatp" "${CACHEPATH}mdatp.txt"

else
	echo "Failed to download all required components!"
	rm -f "${MUNKIPATH}preflight.d/mdatp.sh"

	# Signal that we had an error
	ERR=1
fi
