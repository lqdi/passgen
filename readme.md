# LQDI's Password Generator

## About
Simple password generation tool. Generates passwords based on a dictionary, and also generates BCRYPT and PHP password hashes.

Allows for generation via web tool and command-line

## Requirements
- Web version: PHP 5.4+
- CLI version: PHP 7+

## Web usage
![Web](http://extranet.lqdi.net/interno/passgen/screenshot_web.png)

After installing on your web server, select the password length and symbol usage, and click "Generate" to generate the password. 

The generated passwords and hashes will show on the right panel.

If you wish to generate hashes for another string, you can fill in the "Password" field in the right panel and click "Regenerate hashes".

## Command-line usage
![Web](http://extranet.lqdi.net/interno/passgen/screenshot_cli.png)

```
php passgen [<length=12> <useSymbols=1>]
```


## Authors
Aryel Tupinambá <aryel.tupinamba@lqdi.net>

## License
MIT