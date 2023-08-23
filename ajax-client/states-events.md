# States and Events

## Ready States

* readyState: value indicating status of XMLHttpRequest
* xhr.readyState
  * Values:
    * 0: Connection created buy not opened
    * 1: Connection opened
    * 2: Request sent, received by server
    * 3: Response in progress (partial data)
    * 4: Response complete (success or failure)

## Ready State Change

* onreadystatechange
* Used to store a JavaScript function
* Called each time readyState changes
* Prevents having to constantly recheck value

```js
function replaceElementById(id, text) {
  document.getElementById(id).innerHTML = text;
}

    var xhr = new XMLHttpRequest();
    xhr.open("GET", "script.php", true);
    xhr.onreadystatechange = function () {
        if(xhr.readyState == 4 && xhr.status == 200) {
        replaceElementById("main", xhr.responseText);
        }
    }

    xhr.send();
```
