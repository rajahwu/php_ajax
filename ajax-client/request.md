# Request

## XMLHttpRequest Object

* new
* open(method, url, async)
* send()

```js
    var xhr = new XMLHttpRequest();

    xhr.open("GET", "script.php", true);

    xhr.send();
```

## GET vs POST

* GET requests: used for retrieving data only
* POST request: used for sending/changing data

## Sending forms

* Need to change header for content type
* setRequestHeader(header, value)
* xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

```js
    var xhr = new XMLHttpRequest();

    xhr.open("GET", "script.php", true);

    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.send("first_name=Bob&last_name=Smith");
```
