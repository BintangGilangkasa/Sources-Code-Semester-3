#Import Library
import time
from multiprocessing import Process, current_process


def heavy_test(task_id, iteractions):
    process_name = current_process().name
    print(f"Proses {process_name} memulai tugas {task_id} dengan {iteractions} iterasi")
    for _ in range(iteractions):
        pass
    print(f"Proses {process_name} selesai tugas {task_id}")


#Simulasi StarVation
def simulate_starvayion():
    tasks = [
        (1, 10_000_000), # Iterasi Ringan
        (2, 1_000_000_000), # Iterasi Berat
        (3, 10_000_000), # Iterasi Ringan
        (4, 10_000_000) # Iterasi Ringan
    ]

#
    processes = []
    for task_id, iteracations in tasks:
        process = Process(target=heavy_test, args=(task_id, iteracations))
        processes.append(process)

# Memulai semua proses
    for process in processes:
        process.start()

# Bergabungnya proses
    for process in processes:
        process.join()


if __name__ == "__main__" :
    start_time = time.time()
    simulate_starvayion()
    end_time = time.time()
    print(" ")
    print(f"Waktu total eksekusi {end_time - start_time:.2f} detik")