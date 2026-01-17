print("Hello! I am your MVSR Engineering College Information Chatbot.")
print("You can ask me about timings, courses, departments, location, principal, etc.")
print("Type 'bye' to exit.\n")

while True:
    user_input = input("You: ").lower()

    if "bye" in user_input or "exit" in user_input:
        print("Chatbot: Thank you! Have a great day.")
        break

    elif "timing" in user_input or "timings" in user_input:
        print("Chatbot: MVSR College timings are 9:30 AM to 4:15 PM.")

    elif "courses" in user_input:
        print("Chatbot: MVSR offers B.Tech in CSE, IT, ECE, EEE, Mechanical, Civil, AI&ML, IoT and MBA.")

    elif "departments" in user_input:
        print("Chatbot: Major departments are CSE, IT, ECE, EEE, Mechanical, Civil, AI & ML, IoT, H&S and MBA.")

    elif "principal" in user_input:
        print("Chatbot: The Principal of MVSR Engineering College is Dr. M. Kameshwar Rao.")

    elif "location" in user_input or "where" in user_input:
        print("Chatbot: MVSR Engineering College is located at Nadergul, Hyderabad, Telangana.")

    elif "hostel" in user_input:
        print("Chatbot: MVSR provides separate hostel facilities through Vasavi Academy of Education.")

    elif "fees" in user_input:
        print("Chatbot: Fee details depend on the course and category. Please contact the administration.")

    elif "placements" in user_input:
        print("Chatbot: MVSR has strong placements with companies like TCS, Infosys, Wipro, Cognizant, Capgemini, IBM and more.")

    else:
        print("Chatbot: Sorry, I didn’t understand your question.")