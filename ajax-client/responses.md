# Ajax Responses

* Responses can either be text or XML
* responseText
* responseXML
* Text is more flexivle: text, HTML, JSON, images, etc.

```js
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "script.php", true);
    xhr.send();

    var text = xhr.responseText;
    var xml = xhr.responseXML;

    var target = document.getElementById("main");
    target.innerHTML = text;
```

## Parse the Response

* XML
* JSON

```js
// javascript object
    var person = {
        'first_name': 'Bob',
        'last_name': 'Smith'
    };

// javascript string
    var response = "{
        'first_name': 'Bob',
        'last_name': 'Smith'
    }";

    var person = JSON.parse(response);
```

```js
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "script.php", true);
    xhr.send();

    var json = JSON.parse(xhr.responseText);

    var target = document.getElementById("main");
    target.innerHTML = json.last_name;
```
