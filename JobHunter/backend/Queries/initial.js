window.onload = function() {
    createDatabase();
    createTables();
};

function createDatabase() {
    var create_db = new XMLHttpRequest();
    create_db.onreadystatechange = function() {
        if (create_db.readyState == 4 && create_db.status == 200) {
            console.log(create_db.responseText);
        } else if (create_db.readyState === 4 && create_db.status !== 200) {
            console.log("Error: Request failed. Status: " + create_db.status);
            return false;
        }
    };
    create_db.open("GET", "backend/database/db_initial.php", true);
    create_db.send();
    return true;
}

function createTables() {
    var create_tables = new XMLHttpRequest();
    create_tables.onreadystatechange = function() {
        if (create_tables.readyState == 4 && create_tables.status == 200) {
            console.log(create_tables.responseText);
        } else if (create_tables.readyState === 4 && create_tables.status !== 200) {
            console.log("Error: Request failed. Status: " + create_tables.status);
        }
    };
    create_tables.open("GET", "backend/database/initial.php", true);
    create_tables.send();
}


