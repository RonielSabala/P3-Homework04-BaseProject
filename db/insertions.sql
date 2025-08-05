USE `ThesisHubDb`;

-- Departments
INSERT INTO
  `departments` (`dept_name`, `faculty_head`, `email`)
VALUES
  (
    'Computer Science',
    'Ana Pérez',
    'CompSci@univ.edu'
  ),
  (
    'Mechanical Engineering',
    'Luis Martínez',
    'MechEng@univ.edu'
  ),
  (
    'Business Administration',
    'Carmen Rodríguez',
    'BusAdm@univ.edu'
  );

-- Students
INSERT INTO
  `students` (
    `username`,
    `email`,
    `phone`,
    `password`,
    `department_id`
  )
VALUES
  (
    'student',
    'student@student.univ.edu',
    '809-123-4567',
    "tarea4",
    null
  ),
  (
    'Carlos Gómez',
    'carlos.gomez@student.univ.edu',
    '809-123-4567',
    "123456",
    1
  ),
  (
    'María López',
    'maria.lopez@student.univ.edu',
    '809-234-5678',
    "123456",
    2
  ),
  (
    'José Fernández',
    'jose.fernandez@student.univ.edu',
    '809-345-6789',
    "123456",
    1
  ),
  (
    'Laura Ramírez',
    'laura.ramirez@student.univ.edu',
    '809-456-7890',
    "123456",
    3
  ),
  (
    'Andrés Sánchez',
    'andres.sanchez@student.univ.edu',
    '809-567-8901',
    "123456",
    2
  );

-- Tutors
INSERT INTO
  `tutors` (
    `first_name`,
    `last_name`,
    `email`,
    `specialization`,
    `department_id`
  )
VALUES
  (
    'Ana',
    'Pérez',
    'ana.perez@univ.edu',
    'Inteligencia Artificial',
    1
  ),
  (
    'Pedro',
    'García',
    'pedro.garcia@univ.edu',
    'Robótica',
    2
  ),
  (
    'María',
    'Santos',
    'maria.santos@univ.edu',
    'Marketing',
    3
  ),
  (
    'Luis',
    'Martínez',
    'luis.martinez@univ.edu',
    'Sistemas Embebidos',
    2
  );

-- Projects
INSERT INTO
  `projects` (
    `title`,
    `project_description`,
    `registration_date`,
    `project_status`,
    `student_id`
  )
VALUES
  (
    'Sistema de recomendación',
    'Desarrollo de un sistema de recomendación de libros basado en IA.',
    '2025-01-10 10:00:00',
    'in progress',
    1
  ),
  (
    'Robot explorador',
    'Diseño y construcción de un robot para exploración de terreno.',
    '2025-02-20 14:30:00',
    'under review',
    2
  ),
  (
    'Plan de marketing digital',
    'Elaboración de un plan de marketing para redes sociales.',
    '2025-03-05 09:15:00',
    'approved',
    4
  ),
  (
    'Análisis de datos de salud',
    'Procesamiento y análisis de datos de salud para predicción de enfermedades.',
    '2025-01-20 11:45:00',
    'completed',
    3
  );

-- Project_Tutors
INSERT INTO
  `project_tutors` (`project_id`, `tutor_id`, `tutor_role`)
VALUES
  (1, 1, 'Main Tutor'),
  (1, 4, 'Co-tutor'),
  (2, 2, 'Main Tutor'),
  (3, 3, 'Main Tutor'),
  (4, 1, 'Main Tutor'),
  (4, 2, 'Co-tutor');

-- Documents
INSERT INTO
  `documents` (
    `doc_name`,
    `file_path`,
    `upload_date`,
    `doc_status`,
    `project_id`
  )
VALUES
  (
    'Propuesta_SistRecomend.pdf',
    '/docs/propuesta1.pdf',
    '2025-01-12 08:00:00',
    'under review',
    1
  ),
  (
    'Reporte_Progreso_Robot.pdf',
    '/docs/reporte_robot.pdf',
    '2025-03-01 16:20:00',
    'approved',
    2
  ),
  (
    'Plan_Marketing.pdf',
    '/docs/plan_marketing.pdf',
    '2025-03-10 10:30:00',
    'approved',
    3
  ),
  (
    'Analisis_Datos_Salud.docx',
    '/docs/analisis_salud.docx',
    '2025-02-01 12:00:00',
    'rejected',
    4
  ),
  (
    'Informe_Final_SistRecomend.docx',
    '/docs/informe_final1.docx',
    '2025-04-01 09:45:00',
    'under review',
    1
  );

-- Comments
INSERT INTO
  `comments` (
    `comment_text`,
    `upload_date`,
    `document_id`,
    `tutor_id`
  )
VALUES
  (
    'Buen inicio, pero necesitas detallar más la metodología.',
    '2025-01-13 10:15:00',
    1,
    1
  ),
  (
    'El informe está bien estructurado. Falta agregar resultados experimentales.',
    '2025-04-02 14:00:00',
    5,
    4
  ),
  (
    'Excelente propuesta. Aprobado para la siguiente fase.',
    '2025-03-02 11:30:00',
    2,
    2
  ),
  (
    'Revisar ortografía y formato.',
    '2025-02-05 09:00:00',
    4,
    1
  ),
  (
    'Muy completo, listo para presentación final.',
    '2025-03-12 15:45:00',
    3,
    3
  );