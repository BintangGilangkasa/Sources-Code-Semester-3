import threading
import time

lock1 = threading.Lock()
lock2 = threading.Lock()

def thread1():
    if lock1.acquire(timeout=2):
        print("Thread 1: lock 1 acquired")
        time.sleep(1)
        if lock2.acquire(timeout=2):
            print("Thread 1: lock 2 acquired")
            lock2.release()
        lock1.release()

def thread2():
    if lock2.acquire(timeout=2):
        print("Thread 2: lock 2 acquired")
        time.sleep(1)
        if lock1.acquire(timeout=2):
            print("Thread 2: lock 1 acquired")
            lock1.release()
        lock2.release()

t1 = threading.Thread(target=thread1)
t2 = threading.Thread(target=thread2)

t1.start()
t2.start()

t1.join()
t2.join()

print("Program selesai")