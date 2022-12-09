#include <iostream>
#include <string>
#include <stack>
#include <cstdlib>

using namespace std;

int main()
{
    int state = 0;
    string str = "";
    int operand = 1;
    stack <int> undostack;

    std::cout << "SlavaTech@ AllRights reserved\n";
    
    for (int counter = 0; counter > -1; counter++)
    {
        std::cout << "Current state " << state << "\n";
        std::cout << "Select operation> "; std::cin >> str;
        std::cout << "Input operand: "; std::cin >> operand;

        if (str == "+") {
            state += operand;
        }
        else if(str == "-")
        {
            state -= operand;
        }
        else if (str == "/")
        {
            state /= operand;
        }
        else if (str == "undo")
        {
            for (int counter = 0; counter < operand; counter++)
            {
                undostack.pop();
            }

            state = undostack.top();
        }
        else if (str == "exit")
        {
            exit(0);
        }

        undostack.push(state);
    }
    return 0;
}
