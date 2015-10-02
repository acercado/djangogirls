#!/usr/local/bin/python

import sys
import os

from flup.server.fcgi import WSGIServer
from django.core.wsgi import get_wsgi_application

# sys.path.insert(0, "/usr/lib/python2.4")
sys.path.insert(0, "/home2/adzcer/public_html/python")

# Switch to the directory of your project.
os.chdir("/home2/adzcer/public_html/python")

# Set the DJANGO_SETTINGS_MODULE environment variable.
os.environ['DJANGO_SETTINGS_MODULE'] = "mysite.settings"

# from django.core.servers.fastcgi import runfastcgi
# runfastcgi(method="threaded", daemonize="false")
WSGIServer(get_wsgi_application()).run()
