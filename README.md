# Credit Transfer System
## Final Year Project (Diploma) | PHP, HTML, CSS, Java, SQL

Developed a web-based system to manage and process student credit transfer requests between academic institutions.

*   **Used PHP** for backend logic and database interaction.
*   **HTML/CSS** for frontend interface.
*   **Java** for additional processing modules.

**Features included:**
*   Student registration, subject mapping, application submission, and admin approval workflow.
*   Implemented form validation, secure login, and real-time application status tracking.
*   Designed for use by students, faculty, and admin panels with role-based access.

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
