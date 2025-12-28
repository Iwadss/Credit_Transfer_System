# Credit Transfer System
## Final Year Project (Diploma)

**Technologies**: PHP, HTML, CSS, Java, SQL

### Project Overview
This project is a web-based system developed to manage and process student credit transfer requests between academic institutions. It streamlines the workflow for students, faculty, and administrators.

**Key capabilities include:**
*   **Backend Logic**: Built with **PHP** for robust server-side processing and database interaction.
*   **Frontend Interface**: Designed using **HTML** and **CSS** for a user-friendly experience.
*   **Processing Modules**: Utilizes **Java** for additional processing tasks.
*   **Database**: **SQL** (MySQL) used for data management.

### Features
*   **Student Registration**: Allows potential transfer students to register within the system.
*   **Subject Mapping**: Facilitates the mapping of courses from previous institutions to current programmes.
*   **Application Submission**: Students can submit credit transfer applications online.
*   **Admin Approval Workflow**: A structured workflow for administrators to review and approve/reject applications.
*   **Form Validation**: Ensures data integrity during input.
*   **Secure Login**: Role-based access control for security.
*   **Real-time Tracking**: Users can track the status of their applications.

### Role-Based Access
*   **Students**: Apply for transfers, view status.
*   **Faculty/Admin**: Manage mappings, review applications, approve requests.

---

## Technical Details & Installation

### Technologies Used in Repository
*   **Frontend**: HTML5, CSS3, Bootstrap, JavaScript (jQuery).
*   **Backend**: PHP.
*   **Database**: MySQL.

### Installation & Setup

1.  **Clone the repository**:
    ```bash
    git clone https://github.com/aiman279/Credit_Transfer_System.git
    ```

2.  **Database Setup**:
    *   Create a MySQL database named `credit_transfer_system_dbs`.
    *   Import the SQL dump if available, or ensure the following tables exist:
        *   `institute_dbs`
        *   `course_dbs`
        *   `mapping_dbs`
        *   `student_record`

3.  **Configuration**:
    *   Locate the database connection file (e.g., `mysqli.php` or `conn.php`).
    *   Update the credentials:
        ```php
        $dbc = mysqli_connect("localhost", "root", "", "credit_transfer_system_dbs");
        ```

4.  **Run the Application**:
    *   Place the project folder in your web server's root directory (e.g., `htdocs`).
    *   Start Apache and MySQL.
    *   Access via: `http://localhost/Credit_Transfer_System`.
