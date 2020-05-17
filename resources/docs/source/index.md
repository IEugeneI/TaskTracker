---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Tasks


APIs for managing tasks
<!-- START_4227b9e5e54912af051e8dd5472afbce -->
## Show all tasks

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/tasks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/tasks"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "title": "Fix header",
        "description": "Fix header in front",
        "status": "View",
        "user_id": 5,
        "created_at": null,
        "updated_at": "2020-05-17T14:45:15.000000Z"
    },
    {
        "id": 2,
        "title": "Api",
        "description": "Make backend api",
        "status": "In Progress",
        "user_id": 2,
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 3,
        "title": "Fix",
        "description": "Fix footer",
        "status": "Done",
        "user_id": 3,
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 4,
        "title": "Database connection",
        "description": "Settings env file ,make database connection",
        "status": "Done",
        "user_id": 4,
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 5,
        "title": "Api",
        "description": "Make tasks tracker api",
        "status": "In Progress",
        "user_id": 5,
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 6,
        "title": "testaaa",
        "description": "rwerwetew",
        "status": "Done",
        "user_id": null,
        "created_at": "2020-05-17T13:52:45.000000Z",
        "updated_at": "2020-05-17T13:52:45.000000Z"
    },
    {
        "id": 7,
        "title": "testaaa",
        "description": "rwerwetewrewrwerwe",
        "status": "Done",
        "user_id": null,
        "created_at": "2020-05-17T14:26:04.000000Z",
        "updated_at": "2020-05-17T14:26:04.000000Z"
    }
]
```

### HTTP Request
`GET api/tasks`


<!-- END_4227b9e5e54912af051e8dd5472afbce -->

<!-- START_4da0d9b378428dcc89ced395d4a806e7 -->
## Create task

> Example request:

```bash
curl -X POST \
    "http://localhost/api/tasks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"Front Fix","description":"Fix footer button","status":"Done(View\/In Progress)","user_id":1}'

```

```javascript
const url = new URL(
    "http://localhost/api/tasks"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "Front Fix",
    "description": "Fix footer button",
    "status": "Done(View\/In Progress)",
    "user_id": 1
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/tasks`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  required  | max:50  The title of task.
        `description` | string |  required  | max:255 The description of the task.
        `status` | email |  required  | max:255 The status of the task.
        `user_id` | integer |  optional  | The user_id who doing task.
    
<!-- END_4da0d9b378428dcc89ced395d4a806e7 -->

<!-- START_5297efa151ae4fd515fec2efd5cb1e9a -->
## Show task by id

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/tasks/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/tasks/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "title": "Fix header",
    "description": "Fix header in front",
    "status": "View",
    "user_id": 5,
    "created_at": null,
    "updated_at": "2020-05-17T14:45:15.000000Z"
}
```

### HTTP Request
`GET api/tasks/{task}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the task.

<!-- END_5297efa151ae4fd515fec2efd5cb1e9a -->

<!-- START_546f027bf591f2ef4a8a743f0a59051d -->
## Update Task

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/tasks/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"Front Fix","description":"Fix footer button","status":"Done(View\/In Progress)","user_id":1}'

```

```javascript
const url = new URL(
    "http://localhost/api/tasks/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "Front Fix",
    "description": "Fix footer button",
    "status": "Done(View\/In Progress)",
    "user_id": 1
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/tasks/{task}`

`PATCH api/tasks/{task}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the task.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  required  | max:50  The title of task.
        `description` | string |  required  | max:255 The description of the task.
        `status` | email |  required  | max:255 The status of the task.
        `user_id` | integer |  optional  | The user_id who doing task.
    
<!-- END_546f027bf591f2ef4a8a743f0a59051d -->

<!-- START_8b8069956f22facfa8cdc67aece156a8 -->
## Delete task

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/tasks/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/tasks/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/tasks/{task}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the task.

<!-- END_8b8069956f22facfa8cdc67aece156a8 -->

<!-- START_7ee1372337ab606faaa5942ae37dde32 -->
## Get all tasks for status(Done,View,In Progress)

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/tasks/getTasksForStatus/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/tasks/getTasksForStatus/ut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[]
```

### HTTP Request
`GET api/tasks/getTasksForStatus/{status}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `status` |  required  | The status(View/Done/In Progress)  of the task.

<!-- END_7ee1372337ab606faaa5942ae37dde32 -->

<!-- START_505130359df79027bfd00caf62054144 -->
## Change task status by id

> Example request:

```bash
curl -X POST \
    "http://localhost/api/tasks/changeTaskStatus/ad" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"status":"laboriosam"}'

```

```javascript
const url = new URL(
    "http://localhost/api/tasks/changeTaskStatus/ad"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "laboriosam"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/tasks/changeTaskStatus/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The id of the task.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `status` | required |  required  | max:15  The status(View/Done/In Progress)  of the task.
    
<!-- END_505130359df79027bfd00caf62054144 -->

<!-- START_e80ebfbdee31078111da081e9403fd3b -->
## Change user for task

> Example request:

```bash
curl -X POST \
    "http://localhost/api/tasks/changeUser" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":1,"user_id":2}'

```

```javascript
const url = new URL(
    "http://localhost/api/tasks/changeUser"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 1,
    "user_id": 2
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/tasks/changeUser`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | integer |  required  | The id of task.
        `user_id` | integer |  required  | The id of the user.
    
<!-- END_e80ebfbdee31078111da081e9403fd3b -->

#User


APIs for managing users
<!-- START_fc1e4f6a697e3c48257de845299b71d5 -->
## Show all users

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "first_name": "Valera",
        "last_name": "Valeriev",
        "email": "FbYXhYVAfB@gmail.com",
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 2,
        "first_name": "Vasilii",
        "last_name": "Vetrov",
        "email": "s3pJoztQJR@gmail.com",
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 3,
        "first_name": "Genadii",
        "last_name": "Shebrov",
        "email": "AiFFx4cxR0@gmail.com",
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 4,
        "first_name": "Valera",
        "last_name": "Valeriev",
        "email": "23lmtpaoye@gmail.com",
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 5,
        "first_name": "Alexandr",
        "last_name": "Petrov",
        "email": "d1yIYjPFc1@gmail.com",
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 6,
        "first_name": "testaaa",
        "last_name": "rwerwetewrewrwerwe",
        "email": "Done@mail.ru",
        "created_at": "2020-05-17T15:39:04.000000Z",
        "updated_at": "2020-05-17T15:39:04.000000Z"
    }
]
```

### HTTP Request
`GET api/users`


<!-- END_fc1e4f6a697e3c48257de845299b71d5 -->

<!-- START_12e37982cc5398c7100e59625ebb5514 -->
## Create a user

> Example request:

```bash
curl -X POST \
    "http://localhost/api/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"Valera","last_name":"Petrov","email":"Petrov@gmail.com"}'

```

```javascript
const url = new URL(
    "http://localhost/api/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "Valera",
    "last_name": "Petrov",
    "email": "Petrov@gmail.com"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/users`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `first_name` | string |  required  | The name of user.
        `last_name` | string |  required  | The last name of the user.
        `email` | email |  required  | unique The email of the user.
    
<!-- END_12e37982cc5398c7100e59625ebb5514 -->

<!-- START_8653614346cb0e3d444d164579a0a0a2 -->
## Show user by id

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "first_name": "Valera",
    "last_name": "Valeriev",
    "email": "FbYXhYVAfB@gmail.com",
    "created_at": null,
    "updated_at": null
}
```

### HTTP Request
`GET api/users/{user}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the user.

<!-- END_8653614346cb0e3d444d164579a0a0a2 -->

<!-- START_48a3115be98493a3c866eb0e23347262 -->
## Update user

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"9","last_name":"Valera","email":"Petrov"}'

```

```javascript
const url = new URL(
    "http://localhost/api/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "9",
    "last_name": "Valera",
    "email": "Petrov"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/users/{user}`

`PATCH api/users/{user}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the user.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `first_name` | string |  required  | The name of user.
        `last_name` | string |  required  | The last name of the user.
        `email` | email |  required  | unique The email of the user.
    
<!-- END_48a3115be98493a3c866eb0e23347262 -->

<!-- START_d2db7a9fe3abd141d5adbc367a88e969 -->
## Delete user

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/users/{user}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the user.

<!-- END_d2db7a9fe3abd141d5adbc367a88e969 -->

#general


<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
## /
> Example request:

```bash
curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET /`


<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->


