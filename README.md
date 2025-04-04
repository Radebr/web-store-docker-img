# Web Store Docker Image

<p align="center">
  <img src="https://github.com/Radebr/web-store-docker-img/blob/main/preview.jpg?raw=true" alt="Project Screenshot"/>
</p>

This project allows you to easily set up and run a web store using Docker and Docker Image.  
The web is connected to a `store` database that contains two main tables: `customers` and `stockes`.

## Getting Started

To build and start the project, use the following commands:

1. **Build the Docker image**:
   ```bash
   docker build -t image_my_store

2. **Build the Containers**:
   ```bash
   docker compose up -d
## Access Information

- **To access the database**:
  - Go to: [http://localhost:8080/](http://localhost:8080/)
  - **Username**: `root`
  - **Password**: `root`

- **To access the web store**:
  - Go to: [http://localhost:8081/](http://localhost:8081/)

- **To access the product addition dashboard (Admin Panel)**:
  - **Username**: `admin`
  - **Password**: `admin`

## Features

- Simple and fast setup using Docker and Docker Compose  
- Fully containerized, scalable, and multi-service architecture using Docker  
- Integrated with a `store` database containing `customers` and `stockes` tables  
- Admin panel for adding and managing products

## Requirements

- Docker
- Docker Compose

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
