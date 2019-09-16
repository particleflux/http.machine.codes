TARGET_DIR = build

all: _static status

status: _tools/generate.php _templates _data/status-codes.json
	_tools/generate.php

_static: static
	cp -r static/* $(TARGET_DIR)/
	cp -r static/.well-known $(TARGET_DIR)/
	#gpg --sign build/.well-known/security.txt --default-key security@machine.codes
	#gpg --verify build/.well-known/security.txt



deploy: all
	s3_website push


.PHONY: all status
