import threading
import time

lock1 = threading.Lock()
lock2 = threading.Lock()

def thread1():
    with lock1:
        print("Thread 1: lock acquired, waiting for lock 2...")
        time.sleep(1)
    with lock2:
        print("Thread 1: Lock 2 acquired.")

def thread2():
    with lock2:
        print("Thread 2: lock acquired, waiting for lock 1...")
        time.sleep(1)
    with lock2:
        print("Thread 2: Lock 1 acquired.")

t1 = threading.Thread(target=thread1)
t2 = threading.Thread(target=thread2)

t1.start()
t2.start()

t1.join()
t2.join()

print("Program selesai")