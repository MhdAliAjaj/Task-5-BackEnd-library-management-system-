{
	"info": {
		"_postman_id": "6741c3b9-e5e1-4a06-bade-17c46ecfcf4a",
		"name": "Task 5  Library System",
		"schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json",
		"_exporter_id": "34450681"
	},
	"item": [
		{
			"name": "User",
			"item": [
				{
					"name": "Auth",
					"item": [
						{
							"name": "Register",
							"request": {
								"method": "POST",
								"header": [],
								"body": {
									"mode": "formdata",
									"formdata": []
								},
								"url": {
									"raw": "http://localhost:8000/api/register",
									"protocol": "http",
									"host": [
										"localhost"
									],
									"port": "8000",
									"path": [
										"api",
										"register"
									]
								}
							},
							"response": []
						},
						{
							"name": "Login",
							"request": {
								"method": "POST",
								"header": [],
								"body": {
									"mode": "formdata",
									"formdata": [
										{
											"key": "email",
											"value": "user@user.user",
											"type": "text"
										},
										{
											"key": "password",
											"value": "123456789",
											"type": "text"
										}
									]
								},
								"url": {
									"raw": "http://localhost:8000/api/login",
									"protocol": "http",
									"host": [
										"localhost"
									],
									"port": "8000",
									"path": [
										"api",
										"login"
									]
								}
							},
							"response": []
						}
					]
				},
				{
					"name": "Action Book",
					"item": [
						{
							"name": "Add Favorate",
							"request": {
								"method": "POST",
								"header": []
							},
							"response": []
						},
						{
							"name": "Add a rating",
							"request": {
								"method": "POST",
								"header": []
							},
							"response": []
						}
					]
				}
			]
		},
		{
			"name": "Visitor",
			"item": [
				{
					"name": "get books",
					"request": {
						"method": "GET",
						"header": []
					},
					"response": []
				}
			]
		}
	]
}