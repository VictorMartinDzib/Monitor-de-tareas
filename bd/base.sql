create table tareas(
	id_tarea int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    titulo varchar(50),
    fecha_asig date,
    fecah_venc date,
    id_asignador int,
    id_user_asignado int,
    id_user_designado int,
    decripcion text,
    fecha_creacion date
);

create table usuarios(
    id_usuario int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre_Apellido varchar(100),
    nombreUsuario varchar(40),
    correo varchar(60),
    contrasenia varchar(50),
    tipo_usuario varchar(50)
)

create table actividades(
    id_actividad int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombreActividad varchar(100),
    detalles text,
    fecha_hora datetime,
    id_tarea int
)


ALTER TABLE tareas 
ADD CONSTRAINT user_asiner
FOREIGN KEY (id_asignador) 
REFERENCES usuarios(id_usuario); 

ALTER TABLE tareas 
ADD CONSTRAINT user_desginer_fk
FOREIGN KEY (id_user_asignado) 
REFERENCES usuarios(id_usuario); 

ALTER TABLE tareas 
ADD CONSTRAINT user_desginere_fk
FOREIGN KEY (id_user_designado) 
REFERENCES usuarios(id_usuario); 

ALTER TABLE actividades
ADD CONSTRAINT tarea_actividad_fk
FOREIGN KEY (id_tarea) 
REFERENCES tareas(id_tarea); 

ALTER TABLE tareas ADD estatus TINYINT;

ALTER TABLE usuarios ADD estatus TINYINT;