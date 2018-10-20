Dynadot API in PHP
===========
API Documentation: http://www.dynadot.com/domain/api2.html

## Usage
### Initialize
Make sure your server IP is whitelisted on the Dynadot [API settings page](https://www.dynadot.com/community/help/question/find-API-settings)
```
$dynadot = new Dynadot("DYNADOT_API_KEY");
```
### Searching for a domain
Search for domains, language is a optional value and is intented for IDN domains.
```
$search_domains = array(
	array('domain' => 'mydomain.com'),
	array('domain' => 'categoría.com','language' => 'spa')
);
```

### Register a domain
You can register a domain for `n` years.
```
$dynadot->register('mydomain.com', 1);
```

### Deleting a domain
This would delete a domain that is still in the grace period.
```
$dynadot->delete('mydomain.com');
```

### Renewing a domain
Renew domain for `n` years.
```
$dynadot->renew('mydomain.com', 3);
```

### Get name servers
Get the name servers set to a given domain.
```
$dynadot->getNameservers('mydomain.com');
```

### Set name servers
Update domain name servers. Up to 13 values.
```
$dynadot->setNameservers(
	'mydomain.com',
	array(
		'ns1.mydomain.com',
		'ns2.mydomain.com'
	)
);
```

### Set renew options
Configure domain renew options. Valid options:

| Option | Explanation |
| ------------- | ------------- |
| `reset` | Reset the domain's renew option to "no renew option" |
| `donot` | Set the domain's renew option to "do not renew" |
| `auto` | set the domain's renew option to "auto-renew" |
```
$dynadot->setRenewOptions('mydomain.com', 'auto');
```

### Set folder
Move a domain to a different folder. Use `Default` as folder name if you want to move the domain to the default folder.
```
$dynadot->setFolder('mydomain.com', 'my folder')
```

License
----------------
Copyright (c) 2013 Arturo León.

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
