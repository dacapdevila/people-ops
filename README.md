# Gestión de Recursos Humanos - Dataset

Este proyecto contiene un dataset generado con Laravel para simular un sistema de gestión de recursos humanos. 
Incluye modelos, migraciones, factories y seeders para poblar la base de datos con datos de prueba.

## 📌 Estructura de la Base de Datos

El dataset contiene las siguientes tablas:

### **1. Departments** (Departamentos)
- `id` (PK)
- `name`
- `created_at`, `updated_at`

### **2. Positions** (Puestos de trabajo)
- `id` (PK)
- `name`
- `salary_range_min`
- `salary_range_max`
- `created_at`, `updated_at`

### **3. Employees** (Empleados)
- `id` (PK)
- `first_name`
- `last_name`
- `email`
- `phone`
- `position_id` (FK a `positions`)
- `department_id` (FK a `departments`)
- `hire_date`
- `salary`
- `status` (activo/inactivo)
- `created_at`, `updated_at`

### **4. Payrolls** (Nóminas de pago)
- `id` (PK)
- `employee_id` (FK a `employees`)
- `base_salary`
- `bonus`
- `deductions`
- `net_salary`
- `pay_date`
- `created_at`, `updated_at`

### **5. Attendances** (Asistencia)
- `id` (PK)
- `employee_id` (FK a `employees`)
- `date`
- `check_in`
- `check_out`
- `status` (presente/tarde/ausente)
- `created_at`, `updated_at`

## 🚀 Instalación y Uso

### **1. Clonar el repositorio**
```sh
    git clone https://github.com/tu-usuario/gestion-recursos-humanos.git
    cd gestion-recursos-humanos
```

### **2. Instalar dependencias**
```sh
    composer install
```

### **3. Configurar el archivo `.env`**
Copia el archivo de entorno de ejemplo y configura la conexión a la base de datos:
```sh
    cp .env.example .env
```

Edita el archivo `.env` para que apunte a tu base de datos.

### **4. Ejecutar migraciones y seeders**
```sh
    php artisan migrate --seed
```

Esto creará las tablas y poblará la base de datos con datos de prueba.

## 🛠 Tecnologías Utilizadas
- **Laravel** 12
- **MySQL / PostgreSQL** (compatible con ambos).
- **Faker** para generación de datos ficticios.
