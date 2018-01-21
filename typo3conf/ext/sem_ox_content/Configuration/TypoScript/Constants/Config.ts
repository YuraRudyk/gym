serverProtocol = http
domain         = www.open-xchange.com

[globalString = IENV:TYPO3_SSL=1] || [globalString = _SERVER|HTTP_VIA=HTTPS*] || [globalString = _SERVER|HTTPS=On] || [globalString = _SERVER|HTTPS=on]
    serverProtocol = https
[GLOBAL]

[globalString = IENV:HTTP_HOST = staging.open-xchange.com]
    domain = staging.open-xchange.com
[global]

[globalString = IENV:HTTP_HOST = open-xchange.com]
    domain = www.open-xchange.com
[global]

[globalString = IENV:HTTP_HOST = open-xchange.lh]
    domain = open-xchange.lh
[global]

[globalString = IENV:HTTP_HOST = open-xchange.local]
    domain = open-xchange.local
[global]

[globalString = IENV:HTTP_HOST = testing.open-xchange.com]
    domain = testing.open-xchange.com
[global]

[globalString = IENV:HTTP_HOST = localhost]
    domain = localhost
[global]