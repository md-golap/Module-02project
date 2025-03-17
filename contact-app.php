<?php  

function addContact(array &$contacts, string $name, string $email, string $phone): void {  
    $contacts[] = [  
        'name' => $name,  
        'email' => $email,  
        'phone' => $phone  
    ];  
}  

function displayContacts(array $contacts): void {  
    if (empty($contacts)) {  
        echo "No contacts available.\n";  
        return;  
    }  
    
    foreach ($contacts as $index => $contact) {  
        echo ($index + 1) . ". Name: {$contact['name']}, Email: {$contact['email']}, Phone: {$contact['phone']}\n";  
    }  
}  

$contacts = [];  
$running = true;  

while ($running) {  
    echo "\nMenu:\n";  
    echo "1. Add Contact\n";  
    echo "2. View Contacts\n";  
    echo "3. Exit\n";  
    $choice = readline("Please choose an option (1-3): ");  

    switch ($choice) {  
        case 1:  
            $name = readline("Enter name: ");  
            $email = readline("Enter email: ");  
            $phone = readline("Enter phone number: ");  
            addContact($contacts, $name, $email, $phone);  
            echo "Contact added successfully.\n";  
            break;  
        case 2:  
            displayContacts($contacts);  
            break;  
        case 3:  
            $running = false;  
            echo "Exiting...\n";  
            break;  
        default:  
            echo "Invalid choice. Please try again.\n";  
    }  
}  
?>  