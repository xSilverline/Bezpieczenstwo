var mime_samples = [
  { 'mime': 'application/javascript', 'samples': [
    { 'url': 'http://localhost/content/scripts/inject1.js', 'dir': '_m0/0', 'linked': 2, 'len': 1421 },
    { 'url': 'http://localhost/content/scripts/inject2.js', 'dir': '_m0/1', 'linked': 2, 'len': 291 },
    { 'url': 'http://localhost/content/scripts/inject3.js', 'dir': '_m0/2', 'linked': 2, 'len': 969 },
    { 'url': 'http://localhost/content/scripts/manifest.json', 'dir': '_m0/3', 'linked': 2, 'len': 354 },
    { 'url': 'http://localhost/content/scripts/setStorage.js', 'dir': '_m0/4', 'linked': 2, 'len': 338 } ]
  },
  { 'mime': 'application/xhtml+xml', 'samples': [
    { 'url': 'http://localhost/', 'dir': '_m1/0', 'linked': 2, 'len': 10918 },
    { 'url': 'http://localhost/content/Opinion.php', 'dir': '_m1/1', 'linked': 2, 'len': 1515 },
    { 'url': 'http://localhost/content/', 'dir': '_m1/2', 'linked': 5, 'len': 5196 },
    { 'url': 'http://localhost/content/scripts/', 'dir': '_m1/3', 'linked': 5, 'len': 2186 },
    { 'url': 'http://localhost/content/scripts/https:/cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js', 'dir': '_m1/4', 'linked': 2, 'len': 351 },
    { 'url': 'http://localhost/content/styles/', 'dir': '_m1/5', 'linked': 2, 'len': 2562 },
    { 'url': 'http://localhost/content/HomePage.php', 'dir': '_m1/6', 'linked': 2, 'len': 781 },
    { 'url': 'http://localhost/content/Login.php', 'dir': '_m1/7', 'linked': 5, 'len': 1192 },
    { 'url': 'http://localhost/content/Register.php', 'dir': '_m1/8', 'linked': 5, 'len': 1494 },
    { 'url': 'http://localhost/content/reset.php', 'dir': '_m1/9', 'linked': 5, 'len': 978 },
    { 'url': 'http://localhost/icons/', 'dir': '_m1/10', 'linked': 2, 'len': 290 } ]
  },
  { 'mime': 'application/zip', 'samples': [
    { 'url': 'http://localhost/content/scripts/inject1.zip', 'dir': '_m2/0', 'linked': 2, 'len': 681 } ]
  },
  { 'mime': 'image/gif', 'samples': [
    { 'url': 'http://localhost/icons/a.gif', 'dir': '_m3/0', 'linked': 0, 'len': 246 },
    { 'url': 'http://localhost/icons/back.gif', 'dir': '_m3/1', 'linked': 2, 'len': 216 },
    { 'url': 'http://localhost/icons/blank.gif', 'dir': '_m3/2', 'linked': 2, 'len': 148 },
    { 'url': 'http://localhost/icons/compressed.gif', 'dir': '_m3/3', 'linked': 2, 'len': 1038 },
    { 'url': 'http://localhost/icons/dir.gif', 'dir': '_m3/4', 'linked': 0, 'len': 225 },
    { 'url': 'http://localhost/icons/image2.gif', 'dir': '_m3/5', 'linked': 2, 'len': 309 } ]
  },
  { 'mime': 'image/jpeg', 'samples': [
    { 'url': 'http://localhost/content/styles/backimg.jpg', 'dir': '_m4/0', 'linked': 2, 'len': 268374 } ]
  },
  { 'mime': 'image/png', 'samples': [
    { 'url': 'http://localhost/icons/a.png', 'dir': '_m5/0', 'linked': 0, 'len': 189 },
    { 'url': 'http://localhost/icons/blank.png', 'dir': '_m5/1', 'linked': 0, 'len': 105 },
    { 'url': 'http://localhost/icons/compressed.png', 'dir': '_m5/2', 'linked': 0, 'len': 991 },
    { 'url': 'http://localhost/icons/image2.png', 'dir': '_m5/3', 'linked': 0, 'len': 229 },
    { 'url': 'http://localhost/icons/link.png', 'dir': '_m5/4', 'linked': 0, 'len': 188 },
    { 'url': 'http://localhost/icons/ubuntu-logo.png', 'dir': '_m5/5', 'linked': 2, 'len': 3338 } ]
  },
  { 'mime': 'text/css', 'samples': [
    { 'url': 'http://localhost/content/styles/Form.css', 'dir': '_m6/0', 'linked': 2, 'len': 2933 },
    { 'url': 'http://localhost/content/styles/HomePage.css', 'dir': '_m6/1', 'linked': 2, 'len': 2121 },
    { 'url': 'http://localhost/content/styles/Login.css', 'dir': '_m6/2', 'linked': 2, 'len': 2138 },
    { 'url': 'http://localhost/content/styles/mainStyle.css', 'dir': '_m6/3', 'linked': 2, 'len': 3012 },
    { 'url': 'http://localhost/content/styles/reset.css', 'dir': '_m6/4', 'linked': 2, 'len': 1435 } ]
  },
  { 'mime': 'text/html', 'samples': [
    { 'url': 'http://localhost/content/accept.php', 'dir': '_m7/0', 'linked': 2, 'len': 4 } ]
  },
  { 'mime': 'text/plain', 'samples': [
    { 'url': 'http://localhost/content/scripts/jquery.js', 'dir': '_m8/0', 'linked': 5, 'len': 86358 },
    { 'url': 'http://localhost/content/admin.php', 'dir': '_m8/1', 'linked': 2, 'len': 2 } ]
  }
];

var issue_samples = [
  { 'severity': 3, 'type': 40401, 'samples': [
    { 'url': 'http://localhost/content/scripts/jquery.js', 'extra': 'Delimited database dump', 'sid': '0', 'dir': '_i0/0' } ]
  },
  { 'severity': 2, 'type': 30601, 'samples': [
    { 'url': 'http://localhost/content/Opinion.php', 'extra': '', 'sid': '0', 'dir': '_i1/0' } ]
  },
  { 'severity': 0, 'type': 10901, 'samples': [
    { 'url': 'http://localhost/content/scripts/inject1.js', 'extra': '', 'sid': '0', 'dir': '_i2/0' },
    { 'url': 'http://localhost/content/scripts/inject1.zip', 'extra': '', 'sid': '0', 'dir': '_i2/1' },
    { 'url': 'http://localhost/content/scripts/inject2.js', 'extra': '', 'sid': '0', 'dir': '_i2/2' },
    { 'url': 'http://localhost/content/scripts/inject3.js', 'extra': '', 'sid': '0', 'dir': '_i2/3' },
    { 'url': 'http://localhost/content/config2.php', 'extra': '', 'sid': '0', 'dir': '_i2/4' } ]
  },
  { 'severity': 0, 'type': 10803, 'samples': [
    { 'url': 'http://localhost/content/scripts/inject1.js', 'extra': '', 'sid': '0', 'dir': '_i3/0' },
    { 'url': 'http://localhost/content/scripts/inject2.js', 'extra': '', 'sid': '0', 'dir': '_i3/1' },
    { 'url': 'http://localhost/content/scripts/inject3.js', 'extra': '', 'sid': '0', 'dir': '_i3/2' },
    { 'url': 'http://localhost/content/scripts/jquery.js', 'extra': '', 'sid': '0', 'dir': '_i3/3' },
    { 'url': 'http://localhost/content/scripts/manifest.json', 'extra': '', 'sid': '0', 'dir': '_i3/4' },
    { 'url': 'http://localhost/content/scripts/setStorage.js', 'extra': '', 'sid': '0', 'dir': '_i3/5' },
    { 'url': 'http://localhost/content/styles/Form.css', 'extra': '', 'sid': '0', 'dir': '_i3/6' },
    { 'url': 'http://localhost/content/styles/HomePage.css', 'extra': '', 'sid': '0', 'dir': '_i3/7' },
    { 'url': 'http://localhost/content/styles/Login.css', 'extra': '', 'sid': '0', 'dir': '_i3/8' },
    { 'url': 'http://localhost/content/styles/mainStyle.css', 'extra': '', 'sid': '0', 'dir': '_i3/9' },
    { 'url': 'http://localhost/content/styles/reset.css', 'extra': '', 'sid': '0', 'dir': '_i3/10' } ]
  },
  { 'severity': 0, 'type': 10801, 'samples': [
    { 'url': 'http://localhost/content/admin.php', 'extra': 'text/plain', 'sid': '0', 'dir': '_i4/0' } ]
  },
  { 'severity': 0, 'type': 10601, 'samples': [
    { 'url': 'http://localhost/content/scripts/jquery.js', 'extra': '', 'sid': '0', 'dir': '_i5/0' },
    { 'url': 'http://localhost/content/Login.php/', 'extra': '', 'sid': '0', 'dir': '_i5/1' },
    { 'url': 'http://localhost/content/Register.php/', 'extra': '', 'sid': '0', 'dir': '_i5/2' },
    { 'url': 'http://localhost/content/reset.php/', 'extra': '', 'sid': '0', 'dir': '_i5/3' } ]
  },
  { 'severity': 0, 'type': 10505, 'samples': [
    { 'url': 'http://localhost/content/Opinion.php', 'extra': 'captcha', 'sid': '0', 'dir': '_i6/0' } ]
  },
  { 'severity': 0, 'type': 10405, 'samples': [
    { 'url': 'http://localhost/icons/a.gif', 'extra': '', 'sid': '0', 'dir': '_i7/0' },
    { 'url': 'http://localhost/icons/a.png', 'extra': '', 'sid': '0', 'dir': '_i7/1' },
    { 'url': 'http://localhost/icons/blank.png', 'extra': '', 'sid': '0', 'dir': '_i7/2' },
    { 'url': 'http://localhost/icons/compressed.png', 'extra': '', 'sid': '0', 'dir': '_i7/3' },
    { 'url': 'http://localhost/icons/dir.gif', 'extra': '', 'sid': '0', 'dir': '_i7/4' },
    { 'url': 'http://localhost/icons/image2.png', 'extra': '', 'sid': '0', 'dir': '_i7/5' },
    { 'url': 'http://localhost/icons/link.png', 'extra': '', 'sid': '0', 'dir': '_i7/6' } ]
  },
  { 'severity': 0, 'type': 10404, 'samples': [
    { 'url': 'http://localhost/content/', 'extra': 'Directory listing', 'sid': '0', 'dir': '_i8/0' },
    { 'url': 'http://localhost/content/scripts/', 'extra': 'Directory listing', 'sid': '0', 'dir': '_i8/1' },
    { 'url': 'http://localhost/content/scripts/?C=9876sfi;O=D', 'extra': 'Directory listing', 'sid': '0', 'dir': '_i8/2' },
    { 'url': 'http://localhost/content/scripts/?C=N;O=9876sfi', 'extra': 'Directory listing', 'sid': '0', 'dir': '_i8/3' },
    { 'url': 'http://localhost/content/styles/', 'extra': 'Directory listing', 'sid': '0', 'dir': '_i8/4' },
    { 'url': 'http://localhost/content/styles/?C=9876sfi;O=D', 'extra': 'Directory listing', 'sid': '0', 'dir': '_i8/5' },
    { 'url': 'http://localhost/content/styles/?C=N;O=9876sfi', 'extra': 'Directory listing', 'sid': '0', 'dir': '_i8/6' },
    { 'url': 'http://localhost/content/?C=9876sfi;O=D', 'extra': 'Directory listing', 'sid': '0', 'dir': '_i8/7' },
    { 'url': 'http://localhost/content/?C=N;O=9876sfi', 'extra': 'Directory listing', 'sid': '0', 'dir': '_i8/8' } ]
  },
  { 'severity': 0, 'type': 10205, 'samples': [
    { 'url': 'http://localhost/sfi9876', 'extra': '', 'sid': '0', 'dir': '_i9/0' } ]
  },
  { 'severity': 0, 'type': 10202, 'samples': [
    { 'url': 'http://localhost/', 'extra': 'Apache/2.4.29 (Ubuntu)', 'sid': '0', 'dir': '_i10/0' } ]
  },
  { 'severity': 0, 'type': 10201, 'samples': [
    { 'url': 'http://localhost/content/manage.php', 'extra': 'PHPSESSID', 'sid': '0', 'dir': '_i11/0' } ]
  }
];

